<?php

class User_article_model extends Base_model {

    public function delete() {
        $qb = $this->em->createQueryBuilder();
        $qb->select('ua')
                ->from('Entity\UserArticles', 'ua')
                ->orderBy('ua.created', 'DESC');
        $results = $qb->getQuery()->getResult();
        $orderUser = [];
        foreach ($results AS $item) {
            $orderUser[$item->getUser()->getId()][$item->getArticle()->getId()][] = $item;
        }
        $count = 0;
        foreach ($orderUser AS $keyU => $user) {
            foreach ($user AS $keyA => $articles) {
                if ($count > 4) {
                    foreach ($articles AS $key => $article) {
                        $this->em->remove($article);
                    }
                } else {
                    foreach ($articles AS $key => $article) {
                        if ($key != 0) {
                            $this->em->remove($article);
                        }
                    }
                }
                $count++;
            }
            $count = 0;
        }
        try {
            $this->em->flush();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

}
