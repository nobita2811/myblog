<?php

namespace Entity;

/**
 * Articles
 *
 * @Table(name="articles")
 * @Entity
 */
class Articles {

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
     * @Column(name="title", type="string", length=300, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @Column(name="slug_name", type="string", length=300, nullable=true)
     */
    private $slugName;

    /**
     * @var string
     *
     * @Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var integer
     *
     * @Column(name="views", type="integer", nullable=true)
     */
    private $views;

    /**
     * @var integer
     *
     * @Column(name="sticky", type="integer", nullable=true)
     */
    private $sticky;

    /**
     * @var string
     *
     * @Column(name="summary", type="string", length=2000, nullable=true)
     */
    private $summary;

    /**
     * @var string
     *
     * @Column(name="origin_source", type="string", length=300, nullable=true)
     */
    private $originSource;

    /**
     * @var \Files
     *
     * @ManyToOne(targetEntity="Files")
     * @JoinColumns({
     *   @JoinColumn(name="file_id", referencedColumnName="id")
     * })
     */
    private $file;

    /**
     * @var \DateTime
     *
     * @Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @Column(name="modified", type="datetime", nullable=true)
     */
    private $modified;

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
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Articles
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle() {
        return $this->title;
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
     * Set content
     *
     * @param string $content
     * @return Articles
     */
    public function setContent($content) {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * Set views
     *
     * @param integer $views
     * @return Articles
     */
    public function setViews($views) {
        $this->views = $views;

        return $this;
    }

    /**
     * Get views
     *
     * @return integer 
     */
    public function getViews() {
        return $this->views;
    }

    /**
     * Set sticky
     *
     * @param integer $sticky
     * @return Articles
     */
    public function setSticky($sticky) {
        $this->sticky = $sticky;

        return $this;
    }

    /**
     * Get sticky
     *
     * @return integer 
     */
    public function getSticky() {
        return $this->sticky;
    }

    /**
     * Set summary
     *
     * @param string $summary
     * @return Articles
     */
    public function setSummary($summary) {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary() {
        return $this->summary;
    }

    /**
     * Set originSource
     *
     * @param string $originSource
     * @return Articles
     */
    public function setOriginSource($originSource) {
        $this->originSource = $originSource;

        return $this;
    }

    /**
     * Get originSource
     *
     * @return string 
     */
    public function getOriginSource() {
        return $this->originSource;
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

    /**
     * Set modified
     *
     * @param \DateTime $modified
     * @return Articles
     */
    public function setModified($modified) {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime 
     */
    public function getModified() {
        return $this->modified;
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
     * Set file
     *
     * @param \Entity\Files $file
     * @return Articles
     */
    public function setFile(\Entity\Files $file = null) {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return \Entity\Files
     */
    public function getFile() {
        return $this->file;
    }

}
