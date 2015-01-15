<?php

class Role_model extends Base_model {

    public function __construct() {
        parent::__construct();
    }

    public function getListRole() {
        try {
            return $this->em->getRepository('Entity\Roles')->findAll();
        } catch (Exception $e) {
            echo $e->getTraceAsString();
            die;
        }
    }

}
