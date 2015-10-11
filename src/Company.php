<?php


/**
 * @Entity(repositoryClass="CompanyRepository")
 * @Table(name="company")
 **/
class Company {
	
	/** @Id @Column(type="integer") @GeneratedValue **/
	private $id;
	
	/** @Column(type="string") **/
	private $companyName;
	
	/**
	 * @OneToMany(targetEntity="User", mappedBy="company")
	 **/
	private $employees;
	
	/**
	 * @OneToMany(targetEntity="Team", mappedBy="company")
	 **/
	private $teams;
	
	function __construct($companyName) {
		$this->companyName = $companyName;
	}
	
	function getId() {
		return $this->id;
	}
	
	function setId($id) {
		$this->id = $id;
	}
	
	function getCompanyName() {
		return $this->companyName;
	}
	
	function setCompanyName($companyName) {
		$this->companyName = $companyName;
	}
	
	function getEmployees() {
		return $this->employees;
	}
	
	function setEmployees($employees) {
		$this->employees = $employees;
	}
	
	function getTeams() {
		return $this->teams;
	}
	
	function setTeams($teams) {
		$this->teams = $teams;
	}

    /**
     * Add employee
     *
     * @param \User $employee
     *
     * @return Company
     */
    public function addEmployee(\User $employee)
    {
        $this->employees[] = $employee;

        return $this;
    }

    /**
     * Remove employee
     *
     * @param \User $employee
     */
    public function removeEmployee(\User $employee)
    {
        $this->employees->removeElement($employee);
    }

    /**
     * Add team
     *
     * @param \Team $team
     *
     * @return Company
     */
    public function addTeam(\Team $team)
    {
        $this->teams[] = $team;

        return $this;
    }

    /**
     * Remove team
     *
     * @param \Team $team
     */
    public function removeTeam(\Team $team)
    {
        $this->teams->removeElement($team);
    }
}
