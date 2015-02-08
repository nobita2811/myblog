<?php

class article extends MY_Controller {

    public function view($slugName = null) {
        if(isset($slugName)) {
            // load this article
            $this->load->model('article_model');
            $data['article'] = $this->article_model->getBySlugName($slugName);
            if(!$data['article']) {
                show_error('Bài viết không tìm thấy');
            }
            $categories = $this->article_model->getCategoryBySlugName($data['article']);            
            foreach($categories AS $cat) {
                $data['categories'][] = [
                    'name' => $cat->getCategory()->getName(),
                    'link' => base_url('category/view/' . $cat->getCategory()->getSlugName())
                ];
            }

            $tags = $this->article_model->getTagBySlugName($data['article']);          
            foreach($tags AS $tag) {
                $data['tags'][] = [
                    'name' => $tag->getTag()->getName(),
                    'link' => base_url('tag/view/' . $tag->getTag()->getSlugName())
                ];
            }
            
            $this->article_model->increaseView($data['article']);
            $this->load->view('layout/header');
            $this->load->view('article/index', $data);
            $this->load->view('layout/footer');
        } else {
            redirect('/');
        }
    }

}
