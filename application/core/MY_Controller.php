<?php

use Cocur\Slugify\Slugify;

class MY_Controller extends CI_Controller {

    public $slug;
    
    public $configUpload = [
        'upload_path' => RESOURCE_PATH . 'upload',
        'allowed_types' => 'gif|jpg|png',
        'max_size' => '1024'
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
    }

}
