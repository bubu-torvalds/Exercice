<?php

/**
 * @Entity(repositoryClass="RepositoryRepository")
 * @Table(name="repository")
 **/
class Repository {
	
	/** @Id 
	 * @Column(type="integer") 
	 * @GeneratedValue 
	 **/
	private $id;
	
	/** @Column(type="string") **/
	private $name;
	
	/** @Column(type="string") **/
	private $fullName;
	
	/**
	 * @ManyToOne(targetEntity="User", inversedBy="repositories")
	 * @JoinColumn(name="owner", referencedColumnName="id")
	 **/
	private $owner;
	
	function __construct($repositoryName) {
		$this->name;
	}
	
	function getId() {
		return $this->id;
	}
	
	function setId($id) {
		$this->id = $id;
	}
	
	function getName() {
		return $this->name;
	}
	
	function setName($name) {
		$this->name = $name;
	}
	
	function getFullName() {
		return $this->fullName;
	}
	
	function setFullName($fullName) {
		$this->fullName = $fullName;
	}
	
	function getOwner() {
		return $this->owner;
	}
	
	function setOwner($owner) {
		$this->owner = $owner;
	}
}
