<?php

class User_model extends Base_model {

    public function __construct() {
        parent::__construct();
    }

    public function getAll() {
        return $this->em->getRepository('Entity\Users')->findAll();
    }

    public function getById($id) {
        return $this->em->getRepository('Entity\Users')->find($id);
    }

    public function getByName($name) {
        $condition = ['name' => $name];
        return $this->em->getRepository('Entity\Users')->findOneBy($condition);
    }

    public function delete($id) {
        if ($user = $this->getById($id)) {
            $this->em->remove($user);
            $this->em->flush();
            return true;
        } else {
            return false;
        }
    }

    public function edit($data, $user) {
        try {
            $user->setName($data['name']);
            $user->setSlugName($this->slug->slugify($data['name']));
            $this->em->persist($user);
            $this->em->flush();
            return true;
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return false;
        }
    }

    public function save($user) {
        $save = new Entity\Users();
        $save->setUsername($user['username']);
        $save->setPassword(md5($user['password']));
        $save->setEmail($user['email']);
        $this->em->persist($save);
        $this->em->flush();
    }

}
