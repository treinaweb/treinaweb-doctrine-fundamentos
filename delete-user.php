<?php

require_once "bootstrap.php";

use App\Entities\User;

$user = $entityManager->find(User::class, 4);

$entityManager->remove($user);

$entityManager->flush();

