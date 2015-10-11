<?php
require_once "bootstrap.php";

$companyName = $argv[1];

echo "Created Company with ID " . $companyName . "\n";

$company = new Company($companyName);

$entityManager->persist($company);
$entityManager->flush();

echo "Created Company with ID " . $company->getId() . "\n";