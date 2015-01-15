<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articles
 *
 * @ORM\Table(name="articles")
 * @ORM\Entity
 */
class Articles
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
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=300, precision=0, scale=0, nullable=true, unique=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="slug_name", type="string", length=300, precision=0, scale=0, nullable=true, unique=false)
     */
    private $slugName;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $content;

    /**
     * @var integer
     *
     * @ORM\Column(name="views", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $views;

    /**
     * @var integer
     *
     * @ORM\Column(name="sticky", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $sticky;

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="string", length=2000, precision=0, scale=0, nullable=true, unique=false)
     */
    private $summary;

    /**
     * @var string
     *
     * @ORM\Column(name="origin_source", type="string", length=300, precision=0, scale=0, nullable=true, unique=false)
     */
    private $originSource;

    /**
     * @var integer
     *
     * @ORM\Column(name="file_id", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $fileId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     */
    private $modified;

    /**
     * @var \Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $user;


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
     * Set title
     *
     * @param string $title
     * @return Articles
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set slugName
     *
     * @param string $slugName
     * @return Articles
     */
    public function setSlugName($slugName)
    {
        $this->slugName = $slugName;
    
        return $this;
    }

    /**
     * Get slugName
     *
     * @return string 
     */
    public function getSlugName()
    {
        return $this->slugName;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Articles
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set views
     *
     * @param integer $views
     * @return Articles
     */
    public function setViews($views)
    {
        $this->views = $views;
    
        return $this;
    }

    /**
     * Get views
     *
     * @return integer 
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set sticky
     *
     * @param integer $sticky
     * @return Articles
     */
    public function setSticky($sticky)
    {
        $this->sticky = $sticky;
    
        return $this;
    }

    /**
     * Get sticky
     *
     * @return integer 
     */
    public function getSticky()
    {
        return $this->sticky;
    }

    /**
     * Set summary
     *
     * @param string $summary
     * @return Articles
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    
        return $this;
    }

    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set originSource
     *
     * @param string $originSource
     * @return Articles
     */
    public function setOriginSource($originSource)
    {
        $this->originSource = $originSource;
    
        return $this;
    }

    /**
     * Get originSource
     *
     * @return string 
     */
    public function getOriginSource()
    {
        return $this->originSource;
    }

    /**
     * Set fileId
     *
     * @param integer $fileId
     * @return Articles
     */
    public function setFileId($fileId)
    {
        $this->fileId = $fileId;
    
        return $this;
    }

    /**
     * Get fileId
     *
     * @return integer 
     */
    public function getFileId()
    {
        return $this->fileId;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Articles
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     * @return Articles
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    
        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime 
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set user
     *
     * @param \Entity\Users $user
     * @return Articles
     */
    public function setUser(\Entity\Users $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Entity\Users 
     */
    public function getUser()
    {
        return $this->user;
    }
}
