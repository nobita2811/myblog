<?php

class search extends MY_Controller {

    public function index($page = 0) {
        $this->load->model('article_model');
        $this->load->library('pagination');
        $perPage = $this->config->config['per_page'];
        $data['datas'] = $this->article_model->getSearchTitle($this->input->post('title'), $page, $perPage);
        $data['search'] = $this->input->post('title');
        $totalRecord = count($data['datas']);
        $config = $this->configPagination;
        $config['base_url'] = base_url('Welcome/index/');
        $config['total_rows'] = $totalRecord;
        $config['per_page'] = $perPage;
        $this->pagination->initialize($config);
        $this->load->view('layout/header', $data);
        $this->load->view('welcome_message', $data);
        $this->load->view('layout/footer');
    }

}
