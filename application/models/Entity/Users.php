<?php

namespace Entity;

/**
 * Users
 *
 * @Table(name="users")
 * @Entity
 */
class Users {

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
     * @Column(name="username", type="string", length=20, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @Column(name="password", type="string", length=50, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @Column(name="email", type="string", length=300, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @Column(name="full_name", type="string", length=300, nullable=true)
     */
    private $fullName;

    /**
     * @var string
     *
     * @Column(name="work", type="string", length=300, nullable=true)
     */
    private $work;

    /**
     * @var integer
     *
     * @Column(name="age", type="integer", nullable=true)
     */
    private $age;

    /**
     * @var integer
     *
     * @Column(name="gender", type="integer", nullable=true)
     */
    private $gender;

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
     * @var \Roles
     *
     * @ManyToOne(targetEntity="Roles")
     * @JoinColumns({
     *   @JoinColumn(name="role_id", referencedColumnName="id")
     * })
     */
    private $role;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Users
     */
    public function setUsername($username) {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Users
     */
    public function setPassword($password) {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Users
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
     * Set fullName
     *
     * @param string $fullName
     * @return Users
     */
    public function setFullName($fullName) {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get fullName
     *
     * @return string 
     */
    public function getFullName() {
        return $this->fullName;
    }

    /**
     * Set work
     *
     * @param string $work
     * @return Users
     */
    public function setWork($work) {
        $this->work = $work;

        return $this;
    }

    /**
     * Get work
     *
     * @return string 
     */
    public function getWork() {
        return $this->work;
    }

    /**
     * Set age
     *
     * @param integer $age
     * @return Users
     */
    public function setAge($age) {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge() {
        return $this->age;
    }

    /**
     * Set gender
     *
     * @param integer $gender
     * @return Users
     */
    public function setGender($gender) {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return integer 
     */
    public function getGender() {
        return $this->gender;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Users
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
     * @return Users
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
     * Set role
     *
     * @param \Entity\Roles $role
     * @return Users
     */
    public function setRole(\Entity\Roles $role = null) {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \Entity\Roles 
     */
    public function getRole() {
        return $this->role;
    }

}
