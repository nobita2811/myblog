<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

    public function index($page = 0) {
        $this->load->model('article_model');
        $this->load->library('pagination');
        $totalRecord = $this->article_model->countAllArticle();
        $perPage = $this->config->config['per_page'];
        $config = $this->configPagination;
        $config['base_url'] = base_url('Welcome/index/');
        $config['total_rows'] = $totalRecord;
        $config['per_page'] = $perPage;
        $this->pagination->initialize($config);
        $this->load->view('layout/header');
        $data['datas'] = $this->article_model->getAll($page, $totalRecord, $perPage);
        $this->load->view('welcome_message', $data);
        $this->load->view('layout/footer');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */