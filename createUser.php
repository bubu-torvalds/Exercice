<?php
require_once "bootstrap.php";
require_once "src/User.php";

$login = $argv[1];
$name = $argv[2];
$surname = $argv[3];
$team = $argv[4];
$company = $argv[5];

echo "Created User with login " . $login . "\n";
echo "Created User with name " . $name . "\n";
echo "Created User with surname " . $surname . "\n";
echo "Created User with team " . $team . "\n";
echo "Created User with company " . $company . "\n";


$user = new User($login);
$user->setName($name);
$user->setSurname($surname);
$user->setTeam($team);
$user->setCompany($company);

$entityManager->persist($user);
$entityManager->flush();

echo "Created User with ID " . $user->getId() . "\n";