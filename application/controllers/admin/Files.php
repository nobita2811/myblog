<?php

class Files extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('file_model');
    }

    public function index() {
        $this->load->view('admin/common/header');
        $data['datas'] = $this->file_model->getAll();
        $data['articleFile'] = $this->file_model->getArticleFile();
        $data['deleteLink'] = base_url('admin/files/delete/');
        $data['deleteEdit'] = base_url('admin/files/edit/');
        $this->load->view('admin/file/index', $data);
        $this->load->view('admin/common/footer');
    }

    public function delete($slug_name) {
        if ($this->file_model->delete($slug_name)) {
            $this->session->set_flashdata('result', 'success');
        } else {
            $this->session->set_flashdata('result', 'fail');
        }
        redirect('admin/files/index');
    }

    public function edit($id) {
        $this->load->view('admin/common/header');
        $data['articleFile'] = $this->file_model->getArticleFile();
        $data['action'] = base_url('admin/files/edit/' . $id);
        $data['file'] = $this->file_model->getById($id);
        $this->load->view('admin/file/edit', $data);
        $this->load->library('upload', $this->configUpload);
        if ($this->input->post()) {
            if ($this->upload->do_upload()) {
                if ($this->file_model->edit($this->upload, $data['file'])) {
                    $this->session->set_flashdata('result', 'success');
                } else {
                    $this->session->set_flashdata('result', 'fail');
                }
                redirect('admin/files/index');
            } else {
                show_error($this->upload->display_errors());
            }
        }
        $this->load->view('admin/common/footer', $data);
    }

    public function upload() {
        if ($_FILES) {
            $this->load->library('upload', $this->configUpload);
            $arrReturn = [];
            if ($this->upload->do_upload()) {
                // save image                
                $arrReturn['name'] = $this->upload->file_name;
                $arrReturn['link'] = getUpload($this->upload->file_name, 0);
                $arrReturn['size'] = $this->upload->file_size;
                $arrReturn['error'] = false;
            } else {
                $arrReturn['error'] = $this->upload->display_errors();
            }
            echo json_encode($arrReturn);
        } else {
            $this->load->view('admin/common/header');
            $this->load->view('admin/file/upload');
            $this->load->view('admin/common/footer');
            $this->load->view('admin/file/uploadCssJs');
        }
    }

}
