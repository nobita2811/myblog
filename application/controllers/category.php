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

    public function view($slugName = null) {
        if (isset($slugName)) {
            $this->load->model('category_model');
            $data['allCategories'] = $this->category_model->getAllBySlugName($slugName);
            if(!$data['allCategories']) {
                show_error('Danh mục không tìm thấy');
            }
            $data['maxArticlePerCategory'] = count($data['allCategories'][0]->getArticles());
            $this->load->view('layout/header', $data);
            $this->load->view('category/index', $data);
            $this->load->view('layout/footer');
        } else {
            show_404();
        }
    }

}
