<?php

/**
 * @Entity(repositoryClass="UserRepository")
 * @Table(name="user")
 **/
class User {
	
	/** @Id 
	 *  @Column(type="integer") 
	 *  @GeneratedValue 
	 **/
	private $id;
	
	/** @Column(type="string") **/
	private $login;
	
	/** @Column(type="string") **/
	private $name;
	
	/** @Column(type="string") **/
	private $surname;
	
	/**
	 * @ManyToOne(targetEntity="Team", inversedBy="members")
	 * @JoinColumn(name="team", referencedColumnName="id")
	 **/
	private $team;
	
	/**
	 * @ManyToOne(targetEntity="Company", inversedBy="employees")
	 * @JoinColumn(name="company", referencedColumnName="id")
	 **/
	private $company;
	
	/**
	 * @OneToMany(targetEntity="Repository", mappedBy="owner")
	 **/
	private $repositories;
	
	function __construct($login) {
		$this->login = $login;
	}
	
	function getId() {
		return $this->id;
	}
	
	function setId($id) {
		$this->id = $id;
	}
	
	function getLogin() {
		return $this->login;
	}
	
	function setLogin($login) {
		$this->login = $login;
	}
	
	function getName() {
		return $this->name;
	}
	
	function setName($name) {
		$this->name = $name;
	}
	
	function getSurname() {
		return $this->surname;
	}
	
	function setSurname($surname) {
		$this->surname = $surname;
	}
	
	function getTeam() {
		return $this->team;
	}
	
	function setTeam($team) {
		$this->team = $team;
	}
	
	function getCompany() {
		return $this->company;
	}
	
	function setCompany($company) {
		$this->company = $company;
	}

    /**
     * Add repository
     *
     * @param \Repository $repository
     *
     * @return User
     */
    public function addRepository(\Repository $repository)
    {
        $this->repositories[] = $repository;

        return $this;
    }

    /**
     * Remove repository
     *
     * @param \Repository $repository
     */
    public function removeRepository(\Repository $repository)
    {
        $this->repositories->removeElement($repository);
    }

    /**
     * Get repositories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRepositories()
    {
        return $this->repositories;
    }
}
