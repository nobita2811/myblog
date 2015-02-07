<?php

namespace Proxies\__CG__\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Articles extends \Entity\Articles implements \Doctrine\ORM\Proxy\Proxy
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

    public function setTitle($title)
    {
        $this->__load();
        return parent::setTitle($title);
    }

    public function getTitle()
    {
        $this->__load();
        return parent::getTitle();
    }

    public function setSlugName($slugName)
    {
        $this->__load();
        return parent::setSlugName($slugName);
    }

    public function getSlugName()
    {
        $this->__load();
        return parent::getSlugName();
    }

    public function setContent($content)
    {
        $this->__load();
        return parent::setContent($content);
    }

    public function getContent()
    {
        $this->__load();
        return parent::getContent();
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

    public function setSticky($sticky)
    {
        $this->__load();
        return parent::setSticky($sticky);
    }

    public function getSticky()
    {
        $this->__load();
        return parent::getSticky();
    }

    public function setSummary($summary)
    {
        $this->__load();
        return parent::setSummary($summary);
    }

    public function getSummary()
    {
        $this->__load();
        return parent::getSummary();
    }

    public function setOriginSource($originSource)
    {
        $this->__load();
        return parent::setOriginSource($originSource);
    }

    public function getOriginSource()
    {
        $this->__load();
        return parent::getOriginSource();
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

    public function setModified($modified)
    {
        $this->__load();
        return parent::setModified($modified);
    }

    public function getModified()
    {
        $this->__load();
        return parent::getModified();
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

    public function setFile(\Entity\Files $file = NULL)
    {
        $this->__load();
        return parent::setFile($file);
    }

    public function getFile()
    {
        $this->__load();
        return parent::getFile();
    }

    public function getCategories()
    {
        $this->__load();
        return parent::getCategories();
    }

    public function getTags()
    {
        $this->__load();
        return parent::getTags();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'title', 'slugName', 'content', 'views', 'sticky', 'summary', 'originSource', 'created', 'modified', 'file', 'user', 'categories', 'tags');
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