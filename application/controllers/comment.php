<?php

class comment extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('comment_model');
    }

    public function getAllCommentByArticle($articleId) {
        if (isset($articleId)) {
            return $this->comment_model->getAllCommentByArticle($articleId);
        } else {
            return null;
        }
    }

    public function save() {
        if ($data = $this->input->post()) {
            return $this->comment_model->save($data);
        } else {
            show_404();
        }
    }

}
