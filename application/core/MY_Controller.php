<?php

use Cocur\Slugify\Slugify;

class MY_Controller extends CI_Controller {

    public $slug;
    public $configUpload = [
        'allowed_types' => 'gif|jpg|png',
        'max_size' => '2048'
    ];
    public $configPagination = [
        'full_tag_open' => '<div class="text-center"><ul class="pagination">',
        'full_tag_close' => '</ul></div>',
        'first_link' => 'First',
        'first_tag_open' => '<li>',
        'first_tag_close' => '</li>',
        'last_link' => 'Last',
        'last_tag_open' => '<li>',
        'last_tag_close' => '</li>',
        'next_link' => '&gt',
        'next_tag_open' => '<li>',
        'next_tag_close' => '</li>',
        'prev_link' => '&lt',
        'prev_tag_open' => '<li>',
        'prev_tag_close' => '</li>',
        'cur_tag_open' => '<li><a href="javascript:void(0)" class="btn-current">',
        'cur_tag_close' => '</a></li>',
        'num_tag_open' => '<li>',
        'num_tag_close' => '</li>',
    ];    

    public function __construct() {
        parent::__construct();
        $this->slug = new Slugify();

        // check admin only
        $this->load->library(array('ion_auth','form_validation'));
        if (is_numeric(stripos(strtolower(uri_string()), 'admin')) && !$this->ion_auth->is_admin()) {
            //redirect them to the home page because they must be an administrator to view this
            return show_error('You must be an administrator to view this page.');
        }
        $this->configUpload['upload_path'] = RESOURCE_PATH . DS . "upload";
    }

}
