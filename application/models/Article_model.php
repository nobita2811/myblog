<?php

class Article_model extends Base_model {

    public function __construct() {
        parent::__construct();
    }

    public function getAll($page = null, $totalRecord = null, $perPage = null) {
        if (isset($page, $totalRecord, $perPage)) {
            return $this->em->getRepository('Entity\Articles')->findBy([], ['id' => 'DESC'], $perPage, $page);
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

    public function edit($data, Entity\Articles $article, $categories = [], $tags = []) {
        try {
            $user = $this->em->getRepository('Entity\Users')->find($this->session->userdata('user_id'));
            $article->setTitle(trim($data['title']));
            $article->setSlugName($this->slug->slugify(trim($data['title'])));
            $article->setOriginSource($data['source']);
            $article->setSticky(isset($data['sticky']) ? $data['sticky'] : 0);
            $article->setSummary($data['summary']);
            $article->setContent($data['content']);
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
                $article->setFile($image);
            }
            $this->em->persist($article);
            $this->_saveArticleCategoryTag($article, $data, $categories, $tags);
            $this->em->flush();
            return true;
        } catch (Exception $e) {
            show_error('<pre>' . $e->getMessage() . '</pre>');
            log_message('error', $e->getMessage());
            return false;
        }
    }

    public function save($article, $categories = [], $tags = []) {
        try {
            $save = new Entity\Articles();
            $save->setTitle($article['title']);
            $save->setSlugName($this->slug->slugify($article['title']));
            $save->setContent($article['content']);
            $save->setViews(0);
            $user = $this->em->getRepository('Entity\Users')->find($this->session->userdata('user_id'));
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
            } else {
                show_error($this->upload->display_errors() . $this->configUpload['upload_path']);
            }
            $save->setUser($user);
            $save->setSticky(isset($article['sticky']));
            $save->setOriginSource(isset($article['source']) ? $article['source'] : '');
            $save->setSummary(isset($article['summary']) ? $article['summary'] : '');
            $save->setCreated(new DateTime());
            $save->setModified(new DateTime());
            $this->em->persist($save);
            $this->_saveArticleCategoryTag($save, $article, $categories, $tags);
            $this->em->flush();
        } catch (Exception $e) {
            show_error($e->getMessage());
        }
    }

    private function _saveArticleCategoryTag($entity, $post, $categories, $tags) {
        $postCategories = explode(',', $post['categories']);
        $postTags = explode(',', $post['tags']);
        
        $this->_checkValidCategory($postCategories, $categories, $entity);
        $this->_checkValidTag($postTags, $tags, $entity);
    }
    
    private function _checkValidCategory($postCategories, $listDbCategory, $article) {
        $articleCategoriesSaved = [];        
        // delete old category
        foreach($article->getCategories() AS $item) {
            if(!in_array($item->getCategory()->getName(), $postCategories)) {
                $this->em->remove($item->getCategory());
            } else {
                $articleCategoriesSaved[$item->getCategory()->getName()] = $item->getCategory();
            }
        }
        
        foreach ($postCategories AS $cat) {
            // check category is assign to article
            if(!array_key_exists($cat, $articleCategoriesSaved)) {                
                // check category is new
                $articleCategoryObject = new Entity\ArticleCategories();
                $articleCategoryObject->setArticle($article);
                if(!array_key_exists($cat, $listDbCategory)) {
                    // create new category
                    $categoryObject = new Entity\Categories();
                    $categoryObject->setName(trim($cat));
                    $categoryObject->setSlugName($this->slug->slugify(trim($cat)));
                    $this->em->persist($categoryObject);
                    // add to article
                    $articleCategoryObject->setCategory($categoryObject);
                } else {
                    // add to article
                    $articleCategoryObject->setCategory($listDbCategory[$cat]);
                }
                $this->em->persist($articleCategoryObject);
            }
        }
    }
    
    private function _checkValidTag($postTags, $listDbTag, $article) {
        $articleTagsSaved = [];        
        // delete old category
        foreach($article->getTags() AS $item) {
            if(!in_array($item->getTag()->getName(), $postTags)) {
                $this->em->remove($item->getTag());
            } else {
                $articleTagsSaved[$item->getTag()->getName()] = $item->getTag();
            }
        }
        
        foreach ($postTags AS $cat) {
            // check category is assign to article
            if(!array_key_exists($cat, $articleTagsSaved)) {                
                // check category is new
                $articleTagObject = new Entity\ArticleTags();
                $articleTagObject->setArticle($article);
                if(!array_key_exists($cat, $listDbTag)) {
                    // create new category
                    $tagObject = new Entity\Tags();
                    $tagObject->setName(trim($cat));
                    $tagObject->setSlugName($this->slug->slugify(trim($cat)));
                    $this->em->persist($tagObject);
                    // add to article
                    $articleTagObject->setTag($tagObject);
                } else {
                    // add to article
                    $articleTagObject->setTag($listDbTag[$cat]);
                }
                $this->em->persist($articleTagObject);
            }
        }
    }

    public function countAllArticle() {
        $qb = $this->em->createQueryBuilder();
        $qb->select('count(a.id)');
        $qb->from('Entity\Articles', 'a');
        return $qb->getQuery()->getSingleScalarResult();
    }

    public function getCategoryBySlugName(Entity\Articles $article) {
        $condition = ['article' => $article];
        return $this->em->getRepository('Entity\ArticleCategories')->findBy($condition);
    }

    public function getTagBySlugName(Entity\Articles $article) {
        $condition = ['article' => $article];
        return $this->em->getRepository('Entity\ArticleTags')->findBy($condition);
    }

    public function increaseView(Entity\Articles $article) {
        if($this->session->userdata('user_id')) {
            $userArticle = new Entity\UserArticles();
            $userArticle->setArticle($article);
            $userArticle->setUser($this->em->getRepository('Entity\Users')->find($this->session->userdata('user_id')));
            $this->em->persist($userArticle);            
        }
        $article->setViews($article->getViews() + 1);
        $this->em->flush();
    }

    public function getListCategory() {
        $categories = $this->em->getRepository('Entity\Categories')->findAll();
        $return = [];
        foreach ($categories AS $category) {
            $return[$category->getName()] = $category;
        }
        return $return;
    }

    public function getListTag() {
        $tags = $this->em->getRepository('Entity\Tags')->findAll();
        $return = [];
        foreach ($tags AS $tag) {
            $return[$tag->getName()] = $tag;
        }
        return $return;
    }   
    
    public function getRandomArticle() {
        $qb = $this->em->createQueryBuilder();
        $qb->select('a.title', 'a.slugName')
                ->from('Entity\Articles', 'a');
        return $qb->getQuery()->getArrayResult();
    }

}
