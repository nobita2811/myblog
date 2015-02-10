<?php

use Cocur\Slugify\Slugify;

class Base_model extends CI_Model {

    public $em;
    public $slug;

    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
        $this->slug = new Slugify();        
    }
    
    public function getUser($userId) {
        return $this->em->getRepository('Entity\Users')->find($userId);
    }

}
