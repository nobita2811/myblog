<?php

class File_model extends Base_model {

    public function __construct() {
        parent::__construct();
    }

    public function getArticleFile() {
        $qb = $this->em->createQueryBuilder();
        $qb->select('f.id, a.title, a.slugName')
                ->from('Entity\Articles', 'a')
                ->innerJoin('a.file', 'f');
        $q = $qb->getQuery();
        $result = $q->getArrayResult();
        $return = [];
        foreach ($result AS $item) {
            $return[$item['id']] = [
                'title' => $item['title'],
                'slugName' => $item['slugName'],
            ];
        }
        return $return;
    }

    public function getAll($page = null, $totalRecord = null, $perPage = null) {
        if (isset($page, $totalRecord, $perPage)) {
            return $this->em->getRepository('Entity\Files')->findBy([], ['id' => 'DESC'], $perPage, $page);
        } else {
            return $this->em->getRepository('Entity\Files')->findAll();
        }
    }

    public function getById($id) {
        return $this->em->getRepository('Entity\Files')->find($id);
    }

    public function delete($id = null) {
        if (isset($id)) {
            $file = $this->getById($id);
            $article = $file->getArticles();
            $article->setFile(null);
            $this->em->remove($file);
            $this->em->flush();
            // remove file in server
            if (is_file($file->getFilePath())) {
                unlink($file->getFilePath());
            }
            return true;
        } else {
            return false;
        }
    }

    public function edit($data, Entity\Files $file, $categories = [], $tags = []) {
        $data = is_object($data) ? (array) $data : $data;
        try {
            $file->setFileName($data['file_name']);
            $file->setFilePath($data['upload_path'] . $data['file_name']);
            $file->setFileSize($data['file_size']);
            $file->setFileType($data['file_type']);
            $file->setCreated(new DateTime('now'));
            $file->setUser($this->em->getRepository('Entity\Users')->find($this->session->userdata('user_id')));
            $this->em->persist($file);
            $this->em->flush();
            return true;
        } catch (Exception $e) {
            show_error($e->getMessage());
            log_message('error', $e->getMessage());
            return false;
        }
    }

    public function countAllFile() {
        $qb = $this->em->createQueryBuilder();
        $qb->select('count(a.id)');
        $qb->from('Entity\Files', 'a');
        return $qb->getQuery()->getSingleScalarResult();
    }

}
