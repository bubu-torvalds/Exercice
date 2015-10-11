<?php

/**
 * @Entity(repositoryClass="TeamRepository")
 * @Table(name="team")
 **/
class Team {
	
	/** @Id 
	 * @Column(type="integer") 
	 * @GeneratedValue 
	 **/
	private $id;
	
	/** @Column(type="string") **/
	private $teamName;
	
	/**
	 * @ManyToOne(targetEntity="Company", inversedBy="teams")
	 * @JoinColumn(name="company", referencedColumnName="id")
	 **/
	private $company;
	
	function __construct($teamName) {
		$this->teamName = $teamName;
	}
	
	function getId() {
		return $this->id;
	}
	
	function setId($id) {
		$this->id = $id;
	}
	
	function getTeamName() {
		return $this->teamName;
	}
	
	function setTeamName($teamName) {
		$this->teamName = $teamName;
	}
	
	function getCompany() {
		return $this->company;
	}
	
	function setCompany($company) {
		$this->company = $company;
	}
}
