<?php

require_once "bootstrap.php";

$companyId = $argv[1];

$company = $entityManager->find('Company', (int)$companyId);


echo "Company: ".$company->getCompanyName()."\n";

