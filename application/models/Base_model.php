<?php

class Base_model extends CI_Model {

    public $em;

    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
    }

}
