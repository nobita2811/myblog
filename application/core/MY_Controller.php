<?php

use Cocur\Slugify\Slugify;

class MY_Controller extends CI_Controller {

    public $slug;

    public function __construct() {
        parent::__construct();
        $this->slug = new Slugify();
    }

}
