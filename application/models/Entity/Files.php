<?php

namespace Entity;

/**
 * Files
 *
 * @Table(name="files")
 * @Entity
 */
class Files {

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
     * @Column(name="file_name", type="string", length=300, nullable=true)
     */
    private $fileName;

    /**
     * @var string
     *
     * @Column(name="file_path", type="string", length=300, nullable=true)
     */
    private $filePath;

    /**
     * @var string
     *
     * @Column(name="file_type", type="string", length=5, nullable=true)
     */
    private $fileType;

    /**
     * @var float
     *
     * @Column(name="file_size", type="float", nullable=true)
     */
    private $fileSize;

    /**
     * @var integer
     *
     * @Column(name="views", type="integer", nullable=true)
     */
    private $views;

    /**
     * @var \DateTime
     *
     * @Column(name="created", type="datetime", nullable=true)
     */
    private $created;

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
     * Set fileName
     *
     * @param string $fileName
     * @return Files
     */
    public function setFileName($fileName) {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get fileName
     *
     * @return string 
     */
    public function getFileName() {
        return $this->fileName;
    }

    /**
     * Set filePath
     *
     * @param string $filePath
     * @return Files
     */
    public function setFilePath($filePath) {
        $this->filePath = $filePath;

        return $this;
    }

    /**
     * Get filePath
     *
     * @return string 
     */
    public function getFilePath() {
        return $this->filePath;
    }

    /**
     * Set fileType
     *
     * @param string $fileType
     * @return Files
     */
    public function setFileType($fileType) {
        $this->fileType = $fileType;

        return $this;
    }

    /**
     * Get fileType
     *
     * @return string 
     */
    public function getFileType() {
        return $this->fileType;
    }

    /**
     * Set fileSize
     *
     * @param float $fileSize
     * @return Files
     */
    public function setFileSize($fileSize) {
        $this->fileSize = $fileSize;

        return $this;
    }

    /**
     * Get fileSize
     *
     * @return float 
     */
    public function getFileSize() {
        return $this->fileSize;
    }

    /**
     * Set views
     *
     * @param integer $views
     * @return Files
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
     * Set created
     *
     * @param \DateTime $created
     * @return Files
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
     * @return Files
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

}
