<?php
require_once "bootstrap.php";
require_once "src/Team.php";

$teamName = $argv[1];
$company = $argv[2];
echo "Created Team with name " . $argv[1] . "\n";
echo "Created Team with company " . $argv[2] . "\n";

$team = new Team($teamName);
$team->setCompany($company);

$entityManager->persist($team);
$entityManager->flush();

echo "Created Team with ID " . $team->getId() . "\n";