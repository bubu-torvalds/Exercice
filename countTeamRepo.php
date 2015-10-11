<?php
require_once "bootstrap.php";

if (!isset($argv[1])) {
	echo "USAGE : ". "\n";
	echo "php countTeamRepo.php <teamName>"."\n";
} else {
	$teamName = $argv[1];

	$repositories = $entityManager->getRepository('Repository')->getTeamRepositories($teamName);
	
	foreach ($repositories As $repository) {
		echo "Team ". $teamName . " has " .$repository['nb']. " Git repository";
	}
}