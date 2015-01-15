<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleCategories
 *
 * @ORM\Table(name="article_categories")
 * @ORM\Entity
 */
class ArticleCategories
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDEntity")
     */
    private $id;

    /**
     * @var \Entity\Categories
     *
     * @ORM\ManyToOne(targetEntity="Entity\Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $category;

    /**
     * @var \Entity\Articles
     *
     * @ORM\ManyToOne(targetEntity="Entity\Articles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="article_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $article;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set category
     *
     * @param \Entity\Categories $category
     * @return ArticleCategories
     */
    public function setCategory(\Entity\Categories $category = null)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return \Entity\Categories 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set article
     *
     * @param \Entity\Articles $article
     * @return ArticleCategories
     */
    public function setArticle(\Entity\Articles $article = null)
    {
        $this->article = $article;
    
        return $this;
    }

    /**
     * Get article
     *
     * @return \Entity\Articles 
     */
    public function getArticle()
    {
        return $this->article;
    }
}
