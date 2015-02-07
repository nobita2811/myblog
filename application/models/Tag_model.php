<?php

class Tag_model extends Base_model {

    public function __construct() {
        parent::__construct();
    }

    public function getAll() {
        return $this->em->getRepository('Entity\Tags')->findBy([], ['name' => 'ASC']);
    }

    public function getById($id) {
        return $this->em->getRepository('Entity\Tags')->find($id);
    }

    public function getAllBySlugName($slug_name) {
        $condition = ['slugName' => $slug_name];
        return $this->em->getRepository('Entity\Tags')->findBy($condition);
    }
    
    public function getBySlugName($slug_name) {
        $condition = ['slugName' => $slug_name];
        return $this->em->getRepository('Entity\Tags')->findOneBy($condition);
    }

    public function getByName($name) {
        $condition = ['name' => $name];
        return $this->em->getRepository('Entity\Tags')->findOneBy($condition);
    }

}
