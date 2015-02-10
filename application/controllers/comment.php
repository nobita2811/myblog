<?php

class comment extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('comment_model');
    }

    public function getAllCommentByArticle($articleId) {
        if (isset($articleId)) {
            $result = $this->comment_model->getAllCommentByArticle($articleId);
            $html = '';
            foreach($result AS $item) {
                $avatar = getAvatar($item->getUser());
                $html .= $this->_createComment($avatar, $item->getContent(), $item->getEmail(), $item->getName(),$item->getCreated());
            }
            echo $html;
        } else {
            return null;
        }
    }
    
    private function _createComment($avatar, $content, $email, $name, $create) {
        return '<div class="box-comment">
                    <div class="box-comment-avatar"><img src="'.$avatar.'"></div>
                    <div class="box-comment-content">
                        <span class="username">'.$name.'</span>: '.$content.
                        '<br>'.$create->format('d/m/Y').' lúc '.$create->format('H:i:s').'
                    </div>
                </div>
                <div class="clearfix"></div>';
    }

    public function save() {
        if ($data = $this->input->post()) {
            return $this->comment_model->save($data);
        } else {
            show_404();
        }
    }

}
