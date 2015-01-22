<?php

namespace Entity;

/**
 * ArticleCategories
 *
 * @Table(name="article_categories")
 * @Entity
 */
class ArticleCategories {

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
     * @var \Categories
     *
     * @ManyToOne(targetEntity="Categories")
     * @JoinColumns({
     *   @JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;

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
     * Set category
     *
     * @param \Entity\Categories $category
     * @return ArticleCategories
     */
    public function setCategory(\Entity\Categories $category = null) {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Entity\Categories 
     */
    public function getCategory() {
        return $this->category;
    }

}
