<?php

namespace Entity;

/**
 * Comments
 *
 * @Table(name="comments")
 * @Entity
 */
class Comments {

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
     * @Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @Column(name="content", type="string", length=1000, nullable=true)
     */
    private $content;
    
    /**
     * @var \DateTime
     *
     * @Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    
    /**
     * @var \Comments
     *
     * @ManyToOne(targetEntity="Comments")
     * @JoinColumns({
     *   @JoinColumn(name="comment_id", referencedColumnName="id")
     * })
     */
    private $comment;
    
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
    
    public function __construct() {        
        
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
     * Set email
     *
     * @param string $email
     * @return Comments
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Comments
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
     * Set content
     *
     * @param string $content
     * @return Comments
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
     * Set created
     *
     * @param \DateTime $created
     * @return Comments
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
     * Set user
     *
     * @param \Entity\Users $user
     * @return Comments
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
     * Set article
     *
     * @param \Entity\Articles $article
     * @return Comments
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
     * Set comment
     *
     * @param \Entity\Comments $comment
     * @return Comments
     */
    public function setComment(\Entity\Comments $comment = null) {
        $this->comment = $comment;
        
        return $this;
    }

    /**
     * Get comment
     *
     * @return \Entity\Comments
     */
    public function getComment() {
        return $this->comment;
    }
}
