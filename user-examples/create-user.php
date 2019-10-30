<?php

require_once "bootstrap.php";

$user = new App\Entities\User;
$user->setName('Judas');

$user2 = new App\Entities\User;
$user2->setName('Uriel');

$entityManager->persist($user);
$entityManager->persist($user2);

$entityManager->flush();

//var_dump($entityManager);