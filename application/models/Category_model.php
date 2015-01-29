<?php

class Category_model extends Base_model {

    public function __construct() {
        parent::__construct();
    }

    public function getAll() {
        return $this->em->getRepository('Entity\Categories')->findAll();
    }

    public function getById($id) {
        return $this->em->getRepository('Entity\Categories')->find($id);
    }

    public function getBySlugName($slug_name) {
        $condition = ['slugName' => $slug_name];
        return $this->em->getRepository('Entity\Categories')->findOneBy($condition);
    }

    public function getByName($name) {
        $condition = ['name' => $name];
        return $this->em->getRepository('Entity\Categories')->findOneBy($condition);
    }

    public function delete($slug_name) {
        if ($this->getBySlugName($slug_name)) {
            $category = $this->getBySlugName($slug_name);
            $this->em->remove($category);
            $this->em->flush();
            return true;
        } else {
            return false;
        }
    }

    public function edit($data, $category) {
        try {
            $category->setName($data['name']);
            $category->setSlugName($this->slug->slugify($data['name']));
            $this->em->persist($category);
            $this->em->flush();
            return true;
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return false;
        }
    }

    public function save($category) {
        $save = new Entity\Categories();
        $save->setName($category['name']);
        $save->setSlugName($this->slug->slugify($category['name']));
        $this->em->persist($save);
        $this->em->flush();
    }

}
