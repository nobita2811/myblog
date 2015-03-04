<?php

class login extends MY_Controller {

    public function index() {
        if ($this->input->post()) {
            redirect('admin/categories/index');
        }        
        $this->load->view('login');
    }

}
