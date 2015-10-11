<?php
require_once "bootstrap.php";
require_once "src/Repository.php";

$repositoryName = $argv[1];
$fullName = $argv[2];
$owner = $argv[3];

$repository = new Repository($repositoryName);
$repository->setFullName($fullName);
$repository->setOwner($owner);


$entityManager->persist($repository);
$entityManager->flush();

echo "Created Repository with ID " . $repository->getId() . "\n";