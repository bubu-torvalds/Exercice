<?php
require_once "bootstrap.php";

if (!isset($argv[1])) {
	echo "USAGE : ". "\n";
	echo "php countCompanyRepo.php <companyName>"."\n";
} else {
	$company = $argv[1];
	$repositories = $entityManager->getRepository('Repository')->getCompanyRepositories($company);
	
	foreach ($repositories As $repository) {
		echo "Company ". $company . " has " .$repository['nb']. " Git repository";
	}
}
