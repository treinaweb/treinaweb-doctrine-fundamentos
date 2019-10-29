<?php

require_once "bootstrap.php";

use App\Entities\User;

$user = $entityManager->find(User::class, 4);

echo $user->getId() . "<br>";
echo $user->getName();