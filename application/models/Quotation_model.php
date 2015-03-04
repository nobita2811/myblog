<?php

class Quotation_model extends Base_model {
    
    public function save($content) {
        $save = new Entity\Quotations();
        $save->setContent($content);
        $this->em->persist($save);
        $this->em->flush();
    }
    
    public function get() {
        $all = $this->em->getRepository('Entity\Quotations')->findAll();
        $get = rand(0, count($all)-1);
        return $all[$get];
    }
    
}

