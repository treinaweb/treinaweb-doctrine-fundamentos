<?php

require_once "bootstrap.php";

use Doctrine\ORM\Query\ResultSetMappingBuilder;

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

//var_dump($allU);


$map = new ResultSetMappingBuilder($entityManager);
$map->addRootEntityFromClassMetadata('App\Entities\User', 'u');

$query = $entityManager->createNativeQuery('SELECT u.id, u.name FROM user u', $map);

$users1 = $query->getResult();

var_dump($users1);




