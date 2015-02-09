<?php

class Comment_model extends Base_model {

    public function getAllCommentByArticle($articleId = null) {
        // get article
        $this->load->model('article_model');
        $article = $this->article_model->getById($articleId);
        // search by article
        $condition = ['article' => $article];
        $comments = $this->em->getRepository('Entity\Comments')->findBy($condition);
        // return
        return $comments;
    }
    
    public function save($data) {
        // break all field
        $article = $this->em->getRepository('Entity\Comments')->find($data['aritcle']);
        $user = $this->em->getRepository('Entity\Comments')->find($data['user_id']);
        $commentParent = $this->em->getRepository('Entity\Comments')->find($data['comment']);
        
        // save
        $comment = new Entity\Comments();
        $comment->setArticle($article);
        $comment->setUser($user);
        $comment->setComment($commentParent);
        $comment->setEmail($data['email']);
        $comment->setName($data['name']);
        $comment->setContent($data['content']);
        $comment->setCreated(new \DateTime());
        $this->em->persist($comment);
        $this->em->flush();
    }

}
