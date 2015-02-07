<?php

namespace Entity;

/**
 * UserArticles
 *
 * @Table(name="user_articles")
 * @Entity
 */
class UserArticles {

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Articles
     *
     * @ManyToOne(targetEntity="Articles")
     * @JoinColumns({
     *   @JoinColumn(name="article_id", referencedColumnName="id")
     * })
     */
    private $article;

    /**
     * @var \Users
     *
     * @ManyToOne(targetEntity="Users")
     * @JoinColumns({
     *   @JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \DateTime
     *
     * @Column(name="created", type="datetime", nullable=true)
     */
    private $created;
    
    public function __construct() {
        $this->created = new \DateTime();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set article
     *
     * @param \Entity\Articles $article
     * @return ArticleCategories
     */
    public function setArticle(\Entity\Articles $article = null) {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \Entity\Articles 
     */
    public function getArticle() {
        return $this->article;
    }

    /**
     * Set user
     *
     * @param \Entity\Users $user
     * @return Articles
     */
    public function setUser(\Entity\Users $user = null) {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Entity\Users 
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Articles
     */
    public function setCreated($created) {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated() {
        return $this->created;
    }
}
