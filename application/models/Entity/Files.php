<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Files
 *
 * @ORM\Table(name="files")
 * @ORM\Entity
 */
class Files
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
     * @ORM\Column(name="file_name", type="string", length=300, precision=0, scale=0, nullable=true, unique=false)
     */
    private $fileName;

    /**
     * @var string
     *
     * @ORM\Column(name="file_path", type="string", length=300, precision=0, scale=0, nullable=true, unique=false)
     */
    private $filePath;

    /**
     * @var string
     *
     * @ORM\Column(name="file_type", type="string", length=5, precision=0, scale=0, nullable=true, unique=false)
     */
    private $fileType;

    /**
     * @var float
     *
     * @ORM\Column(name="file_size", type="float", precision=0, scale=0, nullable=true, unique=false)
     */
    private $fileSize;

    /**
     * @var integer
     *
     * @ORM\Column(name="views", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $views;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     */
    private $created;

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
     * Set fileName
     *
     * @param string $fileName
     * @return Files
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    
        return $this;
    }

    /**
     * Get fileName
     *
     * @return string 
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set filePath
     *
     * @param string $filePath
     * @return Files
     */
    public function setFilePath($filePath)
    {
        $this->filePath = $filePath;
    
        return $this;
    }

    /**
     * Get filePath
     *
     * @return string 
     */
    public function getFilePath()
    {
        return $this->filePath;
    }

    /**
     * Set fileType
     *
     * @param string $fileType
     * @return Files
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;
    
        return $this;
    }

    /**
     * Get fileType
     *
     * @return string 
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * Set fileSize
     *
     * @param float $fileSize
     * @return Files
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;
    
        return $this;
    }

    /**
     * Get fileSize
     *
     * @return float 
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * Set views
     *
     * @param integer $views
     * @return Files
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
     * Set created
     *
     * @param \DateTime $created
     * @return Files
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
     * Set user
     *
     * @param \Entity\Users $user
     * @return Files
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
