<?php

namespace Entity;

/**
 * Roles
 *
 * @Table(name="roles")
 * @Entity
 */
class Roles {

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
     * @Column(name="permission", type="string", length=2000, nullable=true)
     */
    private $permission;

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
     * @return Roles
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
     * Set permission
     *
     * @param string $permission
     * @return Roles
     */
    public function setPermission($permission) {
        $this->permission = $permission;

        return $this;
    }

    /**
     * Get permission
     *
     * @return string 
     */
    public function getPermission() {
        return $this->permission;
    }

}
