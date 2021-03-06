<?php

namespace Proxies\__CG__\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Files extends \Entity\Files implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setFileName($fileName)
    {
        $this->__load();
        return parent::setFileName($fileName);
    }

    public function getFileName()
    {
        $this->__load();
        return parent::getFileName();
    }

    public function setFilePath($filePath)
    {
        $this->__load();
        return parent::setFilePath($filePath);
    }

    public function getFilePath()
    {
        $this->__load();
        return parent::getFilePath();
    }

    public function setFileType($fileType)
    {
        $this->__load();
        return parent::setFileType($fileType);
    }

    public function getFileType()
    {
        $this->__load();
        return parent::getFileType();
    }

    public function setFileSize($fileSize)
    {
        $this->__load();
        return parent::setFileSize($fileSize);
    }

    public function getFileSize()
    {
        $this->__load();
        return parent::getFileSize();
    }

    public function setViews($views)
    {
        $this->__load();
        return parent::setViews($views);
    }

    public function getViews()
    {
        $this->__load();
        return parent::getViews();
    }

    public function setCreated($created)
    {
        $this->__load();
        return parent::setCreated($created);
    }

    public function getCreated()
    {
        $this->__load();
        return parent::getCreated();
    }

    public function setUser(\Entity\Users $user = NULL)
    {
        $this->__load();
        return parent::setUser($user);
    }

    public function getUser()
    {
        $this->__load();
        return parent::getUser();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'fileName', 'filePath', 'fileType', 'fileSize', 'views', 'created', 'user');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}