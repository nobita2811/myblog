<?php

class Users extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index() {
        $this->load->view('admin/common/header');
        $data['datas'] = $this->user_model->getAll();
        $data['deleteLink'] = base_url('admin/users/delete/');
        $data['deleteEdit'] = base_url('admin/users/edit/');
        $this->load->view('admin/user/index', $data);
        $this->load->view('admin/common/footer');
    }

    public function add() {
        $this->load->view('admin/common/header');
        $data['action'] = base_url('admin/users/add');
        $this->load->view('admin/user/add', $data);
        if($this->input->post()) {
            $this->user_model->save($this->input->post());
            $this->session->set_flashdata('result', 'success');
            redirect('admin/users/index');
        }
        $this->load->view('admin/common/footer', $data);
    }

    public function delete($id) {
        if($this->user_model->delete($id)) {
            $this->session->set_flashdata('result', 'success');
        } else {            
            $this->session->set_flashdata('result', 'fail');
        }
        redirect('admin/users/index');
    }

    public function edit($id) {
        $this->load->view('admin/common/header');
        $data['action'] = base_url('admin/users/edit/' . $id);
        $data['user'] = $this->user_model->getById($id);
        $this->load->view('admin/user/edit', $data);
        if($this->input->post()) {
            if($this->user_model->edit($this->input->post(), $data['user'])) {
                $this->session->set_flashdata('result', 'success');
            } else {
                $this->session->set_flashdata('result', 'fail');                
            }
            redirect('admin/users/index');
        }
        $this->load->view('admin/common/footer', $data);        
    }

}
