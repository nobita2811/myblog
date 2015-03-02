<?php

class category extends MY_Controller {

    public function index() {
        $this->load->model('category_model');
        $data['allCategories'] = $this->category_model->getAll();
        $data['maxArticlePerCategory'] = MAX_ARTICLE_PER_CATEGORY;
        $this->load->view('layout/header', $data);
        $this->load->view('category/index', $data);
        $this->load->view('layout/footer');
    }

    public function view($slugName = null, $page = 0) {
        if (isset($slugName)) {
            $this->load->model('category_model');
            $data['category'] = $this->category_model->getBySlugName($slugName);
            $data['allCategories'] = $this->category_model->getAllBySlugName($slugName);
            if(!$data['allCategories']) {
                show_error('Danh mục không tìm thấy');
            }
            $this->load->library('pagination');
            $totalRecord = count($data['allCategories'][0]->getArticles());
            $perPage = $this->config->config['per_page'];
            $config = $this->configPagination;
            $config['base_url'] = base_url('category/view/'.$slugName . '/');
            $config['total_rows'] = $totalRecord;
            $config['per_page'] = $perPage;
            $this->pagination->initialize($config);
            
            $data['allCategories'] = $this->category_model->getAllBySlugName($slugName, $page, $totalRecord, $perPage);
            $this->load->view('layout/header', $data);
            $this->load->view('category/view', $data);
            $this->load->view('layout/footer');
        } else {
            show_404();
        }
    }

}
