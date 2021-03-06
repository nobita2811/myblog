<?php

class Categories extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('category_model');
    }

    public function index() {
        $this->load->view('admin/common/header');
        $data['datas'] = $this->category_model->getAll();
        $data['deleteLink'] = base_url('admin/categories/delete/');
        $data['deleteEdit'] = base_url('admin/categories/edit/');
        $this->load->view('admin/category/index', $data);
        $this->load->view('admin/common/footer');
    }

    public function add() {
        $this->load->view('admin/common/header');
        $data['action'] = base_url('admin/categories/add');
        $this->load->view('admin/category/add', $data);
        if($this->input->post()) {
            $this->category_model->save($this->input->post());
            $this->session->set_flashdata('result', 'success');
            redirect('admin/categories/index');
        }
        $this->load->view('admin/common/footer', $data);
    }

    public function delete($slug_name) {
        if($this->category_model->delete($slug_name)) {
            $this->session->set_flashdata('result', 'success');
        } else {            
            $this->session->set_flashdata('result', 'fail');
        }
        redirect('admin/categories/index');
    }

    public function edit($slug_name) {
        $this->load->view('admin/common/header');
        $data['action'] = base_url('admin/categories/edit/' . $slug_name);
        $data['category'] = $this->category_model->getBySlugName($slug_name);
        $this->load->view('admin/category/edit', $data);
        if($this->input->post()) {
            if($this->category_model->edit($this->input->post(), $data['category'])) {
                $this->session->set_flashdata('result', 'success');
            } else {
                $this->session->set_flashdata('result', 'fail');                
            }
            redirect('admin/categories/index');
        }
        $this->load->view('admin/common/footer', $data);        
    }

}
