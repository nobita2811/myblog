<?php

class Settings extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('admin/common/header');
        $this->load->view('admin/setting/index');
        $this->load->view('admin/common/footer');
    }

    public function deleteUserHistory() {
        $this->load->model('user_article_model');
        if ($this->user_article_model->delete()) {
            $this->session->set_flashdata('result', 'success');
        } else {
            $this->session->set_flashdata('result', 'fail');
        }
        redirect('/admin/settings/index');
    }

}
