<?php

require_once "bootstrap.php";

use App\Entities\User;

$user = $entityManager->find(User::class, 4);

$user->setName("Judas Silva");

$entityManager->flush();