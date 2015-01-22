<?php

class Role_model extends Base_model {

    public function __construct() {
        parent::__construct();
    }

    public function getListRole() {
        return $this->em->getRepository('Entity\Roles')->findAll();
    }

}
