<?php

require_once "bootstrap.php";

$query = $entityManager->createQuery("SELECT u FROM App\Entities\User u");
$allUsers = $query->getResult();

//var_dump($allUsers);

$query = $entityManager->createQuery("SELECT u FROM App\Entities\User u WHERE u.id > :number");
$query->setParameter('number', $_GET["num"]);
$users = $query->getResult();

var_dump($users);