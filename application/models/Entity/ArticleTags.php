<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleTags
 *
 * @ORM\Table(name="article_tags")
 * @ORM\Entity
 */
class ArticleTags
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
     * @var \Entity\Articles
     *
     * @ORM\ManyToOne(targetEntity="Entity\Articles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="article_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $article;

    /**
     * @var \Entity\Tags
     *
     * @ORM\ManyToOne(targetEntity="Entity\Tags")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tag_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $tag;


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
     * Set article
     *
     * @param \Entity\Articles $article
     * @return ArticleTags
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

    /**
     * Set tag
     *
     * @param \Entity\Tags $tag
     * @return ArticleTags
     */
    public function setTag(\Entity\Tags $tag = null)
    {
        $this->tag = $tag;
    
        return $this;
    }

    /**
     * Get tag
     *
     * @return \Entity\Tags 
     */
    public function getTag()
    {
        return $this->tag;
    }
}
