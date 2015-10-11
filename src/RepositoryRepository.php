<?php

/**
 * RepositoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RepositoryRepository extends \Doctrine\ORM\EntityRepository
{
	public function getUserRepositories($login) {
        $dql = "SELECT count(r.id) As nb FROM repository r Join user u WHERE r.owner = u.id And u.login = ?1";              

        return $this->getEntityManager()->createQuery($dql)
        					 ->setParameter(1, $login)
                             ->getResult();
    }
    
    public function getTeamRepositories($team) {
    	$dql = "SELECT count(r.id) As nb FROM repository r ".
    		   "JOIN user u WITH r.owner = u.id ".
    		   "JOIN team t WHERE u.team = t.id And t.teamName = ?1";   
    	 
    	return $this->getEntityManager()->createQuery($dql)
    				->setParameter(1, $team)
    				->getResult();
    }
    
    public function getCompanyRepositories($company) {
    	$dql = "SELECT count(r.id) As nb FROM repository r ".
    			"JOIN user u WITH r.owner = u.id ".
    			"JOIN company c WHERE u.company = c.id And c.companyName = ?1";
    	
    	return $this->getEntityManager()->createQuery($dql)
    	->setParameter(1, $company)
    	->getResult();
    }
}
