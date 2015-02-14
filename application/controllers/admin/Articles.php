<?php

class Articles extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('article_model');
    }

    public function index() {
        $this->load->view('admin/common/header');
        $data['datas'] = $this->article_model->getAll();
        $data['deleteLink'] = base_url('admin/articles/delete/');
        $data['deleteEdit'] = base_url('admin/articles/edit/');
        $this->load->view('admin/article/index', $data);
        $this->load->view('admin/common/footer');
    }

    public function sticky() {
        $this->load->view('admin/common/header');
        $data['datas'] = $this->article_model->getAllSticky();
        $data['deleteLink'] = base_url('admin/articles/delete/');
        $data['deleteEdit'] = base_url('admin/articles/edit/');
        $this->load->view('admin/article/sticky', $data);
        $this->load->view('admin/common/footer');
    }

    public function add() {
        $this->load->view('admin/common/header');
        $data['action'] = base_url('admin/articles/add');
        $categories = $this->article_model->getListCategory();
        $data['categories'] = array_keys($categories);
        $tags = $this->article_model->getListTag();
        $data['tags'] = array_keys($tags);
        $this->load->view('admin/article/add', $data);
        
        if($this->input->post()) {
            $this->load->library('upload', $this->configUpload);
            $this->article_model->save($this->input->post(), $categories, $tags);
            $this->session->set_flashdata('result', 'success');
            redirect('admin/articles/index');
        }
        $this->load->view('admin/common/footer', $data);
        $this->load->view('admin/article/addjs', $data);
    }

    public function delete($slug_name) {
        if($this->article_model->delete($slug_name)) {
            $this->session->set_flashdata('result', 'success');
        } else {            
            $this->session->set_flashdata('result', 'fail');
        }
        redirect('admin/articles/index');
    }

    public function edit($slug_name) {
        $this->load->view('admin/common/header');
        $data['action'] = base_url('admin/articles/edit/' . $slug_name);
        $data['article'] = $this->article_model->getBySlugName($slug_name);
        $categories = $this->article_model->getListCategory();
        $data['categories'] = array_keys($categories);
        $tags = $this->article_model->getListTag();
        $data['tags'] = array_keys($tags);
        
        foreach($data['article']->getCategories() AS $cat) {
            $data['articleCategories'][] = $cat->getCategory()->getName();
        }
        foreach($data['article']->getTags() AS $cat) {
            $data['articleTags'][] = $cat->getTag()->getName();
        }
        $this->load->view('admin/article/edit', $data);

        if($this->input->post()) {
            $this->load->library('upload', $this->configUpload);
            if($this->article_model->edit($this->input->post(), $data['article'], $categories, $tags)) {
                $this->session->set_flashdata('result', 'success');
            } else {
                $this->session->set_flashdata('result', 'fail');                
            }
            redirect('admin/articles/index');
        }
        $this->load->view('admin/common/footer', $data);
        $this->load->view('admin/article/addjs', $data);      
    }

}
