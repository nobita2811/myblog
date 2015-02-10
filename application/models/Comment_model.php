<?php

class Comment_model extends Base_model {

    public function getAllCommentByArticle($articleId = null) {
        // get article
        $this->load->model('article_model');
        $article = $this->article_model->getById($articleId);
        // search by article
        $condition = ['article' => $article];
        $comments = $this->em->getRepository('Entity\Comments')->findBy($condition, ['id' => 'DESC']);
        // return
        return $comments;
    }
    
    public function save($data) {
        // break all field
        $article = $this->em->getRepository('Entity\Articles')->find($data['article']);//
        
        // save
        $comment = new Entity\Comments();
        $comment->setArticle($article);//
        if($this->session->userdata('user_id')) {
            $user = $this->em->getRepository('Entity\Users')->find($this->session->userdata('user_id'));
            $comment->setUser($user);//
        }
        if(isset($data['comment'])) {
            $commentParent = $this->em->getRepository('Entity\Comments')->find($data['comment']);
            $comment->setComment($commentParent);
        }
        $comment->setEmail($data['email']);//
        $comment->setName($data['name']);//
        $comment->setContent($data['content']);//
        $comment->setCreated(new \DateTime());//
        $this->em->persist($comment);
        $this->em->flush();
    }

}
