<?php

namespace Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Categories
 *
 * @Table(name="categories")
 * @Entity
 */
class Categories {

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="name", type="string", length=300, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @Column(name="slug_name", type="string", length=300, nullable=true)
     */
    private $slugName;
        
    /**
     * @var \ArticleCategories
     *
     * @OneToMany(targetEntity="ArticleCategories", mappedBy="category")
     */
    private $articles;

    public function __construct() {
        $this->articles = new ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Categories
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set slugName
     *
     * @param string $slugName
     * @return Articles
     */
    public function setSlugName($slugName) {
        $this->slugName = $slugName;

        return $this;
    }

    /**
     * Get slugName
     *
     * @return string 
     */
    public function getSlugName() {
        return $this->slugName;
    }
    
    /**
     * Get articles
     *
     * @return \Entity\ArticleCategories
     */
    public function getArticles() {
        return $this->articles->toArray();
    }

}
