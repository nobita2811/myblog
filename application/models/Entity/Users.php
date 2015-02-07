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
     * @Column(name="ip_address", type="string", length=15, nullable=true)
     */
    private $ipAddress;

    /**
     * @var string
     *
     * @Column(name="phone", type="string", length=20, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @Column(name="company", type="string", length=300, nullable=true)
     */
    private $company;

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
     * @var integer
     *
     * @Column(name="created_on", type="integer", nullable=true)
     */
    private $createdOn;

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
     * Set company
     *
     * @param string $company
     * @return Users
     */
    public function setCompany($company) {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string 
     */
    public function getCompany() {
        return $this->company;
    }

    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     * @return Users
     */
    public function setIpAddress($ipAddress) {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return string 
     */
    public function getIpAddress() {
        return $this->ipAddress;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Users
     */
    public function setPhone($phone) {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone() {
        return $this->phone;
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
     * Set createdOn
     *
     * @param integer $createdOn
     * @return integer
     */
    public function setCreatedOn($createdOn) {
        $this->createdOn = $createdOn;

        return $this;
    }

    /**
     * Get createdOn
     *
     * @return integer
     */
    public function getCreatedOn() {
        return $this->createdOn;
    }
    
}
