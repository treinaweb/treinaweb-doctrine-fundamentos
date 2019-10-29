<?php

require_once "bootstrap.php";

$query = $entityManager->createQuery("SELECT u FROM App\Entities\User u");
$allUsers = $query->getResult();

//var_dump($allUsers);

$query = $entityManager->createQuery("SELECT u FROM App\Entities\User u WHERE u.id > :number");
$query->setParameter('number', $_GET["num"]);
$users = $query->getResult();

//var_dump($users);

$queryBuilder = $entityManager->createQueryBuilder();

$queryBuilder->select('u')
             ->from('App\Entities\User', 'u')
             ->where('u.id > :number')
             ->setParameter('number', $_GET["num"]);

$queryDQL = $queryBuilder->getQuery();
$allU = $queryDQL->getResult();

var_dump($allU);
