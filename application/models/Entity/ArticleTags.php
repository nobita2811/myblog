<?php

namespace Entity;

/**
 * ArticleTags
 *
 * @Table(name="article_tags")
 * @Entity
 */
class ArticleTags {

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
     * @var \Tags
     *
     * @ManyToOne(targetEntity="Tags", inversedBy="ArticleTags")
     * @JoinColumns({
     *   @JoinColumn(name="tag_id", referencedColumnName="id")
     * })
     */
    private $tag;

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
     * @return ArticleTags
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
     * Set tag
     *
     * @param \Entity\Tags $tag
     * @return ArticleTags
     */
    public function setTag(\Entity\Tags $tag = null) {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return \Entity\Tags 
     */
    public function getTag() {
        return $this->tag;
    }

}
