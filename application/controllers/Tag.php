<?php

class tag extends MY_Controller {

    public function index() {
        $this->load->model('tag_model');
        $data['allTags'] = $this->tag_model->getAll();
        $data['maxArticlePerTag'] = MAX_ARTICLE_PER_TAG;
        $this->load->view('layout/header', $data);
        $this->load->view('tag/index', $data);
        $this->load->view('layout/footer');
    }

    public function view($slugName = null) {
        if (isset($slugName)) {
            $this->load->model('tag_model');
            $data['allTags'] = $this->tag_model->getAllBySlugName($slugName);
            if(!$data['allTags']) {
                show_error('Danh mục không tìm thấy');
            }
            $data['maxArticlePerTag'] = count($data['allTags'][0]->getArticles());
            $this->load->view('layout/header', $data);
            $this->load->view('tag/view', $data);
            $this->load->view('layout/footer');
        } else {
            show_404();
        }
    }

}
