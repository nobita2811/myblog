<?php

class comment extends MY_Controller {

    private $_listChild = [];
    
    public function __construct() {
        parent::__construct();
        $this->load->model('comment_model');
    }

    public function getAllCommentByArticle($articleId) {
        if (isset($articleId)) {
            $result = $this->comment_model->getAllCommentByArticle($articleId);
            $html = '<table id="dev-table"><thead><tr><th></th></tr></thead><tbody>';
            $listChild = [];
            foreach ($result AS $item) {
                if ($item->getComment()) {
                    $listChild[$item->getComment()->getId()][] = $item;
                }
            }
            $this->_listChild = $listChild;
            foreach ($result AS $item) {
                if (!$item->getComment()) {
                    $avatar = getAvatar($item->getUser());
                    $countReply = isset($listChild[$item->getId()]) ? '(<i>' . count($listChild[$item->getId()]) . ' phản hồi</i>) ' : '';
                    $html .= $this->_createComment($item->getId(), $avatar, $countReply . $item->getContent(), $item->getName(), $item->getCreated());
                    if (isset($listChild[$item->getId()])) {
                        krsort($listChild[$item->getId()]);
                        foreach ($listChild[$item->getId()] AS $itemChild) {
                            $avatar = getAvatar($itemChild->getUser());
                            $html .= $this->_createComment($itemChild->getId(), $avatar, $itemChild->getContent(), $itemChild->getName(), $itemChild->getCreated(), $item->getId());
                        }
                    }
                }
            }
            echo $html . '</tbody></table>';
        } else {
            return null;
        }
    }

    private function _createComment($id, $avatar, $content, $name, $create, $parent = null) {
        $htmlParent = isset($parent) ? ' | Trả lời cho #' . $parent : ' | <button class="btn btn-sm btn-reply" onclick="addReply(' . $id . ');">Trả lời</button>';
        
        $class = isset($parent) ? ' child-comment' : '';
        return '<tr><td><div class="box-comment' . $class . '">
                    <div class="box-comment-avatar"><img src="' . $avatar . '"></div>
                    <div class="box-comment-content"><span class="badge">#' . $id . '</span> 
                        <span class="username">' . $name . '</span>: ' . $content .
                '<br>' . $create->format('d/m/Y') . ' lúc ' . $create->format('H:i:s') . $htmlParent . '
                    </div>
                </div></td></tr>';
    }

    public function save() {
        if ($data = $this->input->post()) {
            return $this->comment_model->save($data);
        } else {
            show_404();
        }
    }

}
