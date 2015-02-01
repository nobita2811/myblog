<?php

class Article_model extends Base_model {

    public function __construct() {
        parent::__construct();
    }

    public function getAll($page = null, $totalRecord = null, $perPage = null) {
        if(isset($page, $totalRecord, $perPage)) {
            return $this->em->getRepository('Entity\Articles')->findBy([], [], $perPage, $page);
        } else {
            return $this->em->getRepository('Entity\Articles')->findAll();
        }
    }

    public function getById($id) {
        return $this->em->getRepository('Entity\Articles')->find($id);
    }

    public function getByName($name) {
        $condition = ['name' => $name];
        return $this->em->getRepository('Entity\Articles')->findOneBy($condition);
    }

    public function getBySlugName($slug_name) {
        $condition = ['slugName' => $slug_name];
        return $this->em->getRepository('Entity\Articles')->findOneBy($condition);
    }

    public function delete($slug_name) {
        if ($this->getBySlugName($slug_name)) {
            $article = $this->getBySlugName($slug_name);
            $this->em->remove($article);
            $this->em->flush();
            return true;
        } else {
            return false;
        }
    }

    public function edit($data, $article) {
        try {
            $article->setName($data['name']);
            $article->setSlugName($this->slug->slugify($data['name']));
            $this->em->persist($article);
            $this->em->flush();
            return true;
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return false;
        }
    }

    public function save($article) {
        $save = new Entity\Articles();
        $save->setTitle($article['title']);
        $save->setSlugName($this->slug->slugify($article['title']));
        $save->setContent($article['content']);
        $save->setViews(0);
        $user = $this->em->getRepository('Entity\Users')->find(1);
        if ($this->upload->do_upload()) {
            // save image
            $image = new Entity\Files();
            $image->setCreated(new DateTime());
            $image->setFileName($this->upload->file_name);
            $image->setFilePath(RESOURCE_PATH . $this->upload->file_name);
            $image->setFileSize($this->upload->file_size);
            $image->setUser($user);
            $image->setFileType($this->upload->file_type);
            $this->em->persist($image);
            $save->setFile($image);
        }
        $save->setUser($user);
        $save->setSticky(isset($article['sticky']));
        $save->setOriginSource(isset($article['source']) ? $article['source'] : '');
        $save->setSummary(isset($article['summary']) ? $article['summary'] : '');
        $save->setCreated(new DateTime());
        $save->setModified(new DateTime());
        $this->em->persist($save);
        $this->em->flush();
    }

    public function countAllArticle() {
        $qb = $this->em->createQueryBuilder();
        $qb->select('count(a.id)');
        $qb->from('Entity\Articles', 'a');
        return $qb->getQuery()->getSingleScalarResult();
    }

}
