<?php
require_once "bootstrap.php";

if (!isset($argv[1])) {
	echo "USAGE : ". "\n";
	echo "php countUserRepo.php <login>"."\n";
} else {
	$login = $argv[1];
	$repositories = $entityManager->getRepository('Repository')->getUserRepositories($login);
	
	foreach ($repositories As $repository) {
		echo "User ". $login . " has " .$repository['nb']. " Git repository"."\n";		
	}
}
