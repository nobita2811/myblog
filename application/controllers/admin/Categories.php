<?php

class Categories extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('category_model');
    }

    public function index() {
        $this->load->view('admin/common/header');
        $data['datas'] = $this->category_model->getAll();
        $this->load->view('admin/category/index', $data);
        $this->load->view('admin/common/footer');
    }

    public function add() {
        $this->load->view('admin/common/header');
        $data['action'] = base_url('admin/categories/add');
        $this->load->view('admin/category/add', $data);
        
        if($this->input->post()) {
            $this->category_model->save($this->input->post());
        }
        $this->load->view('admin/common/footer');
    }

    public function delete() {
        
    }

    public function edit($slug_name) {
        
    }

}
