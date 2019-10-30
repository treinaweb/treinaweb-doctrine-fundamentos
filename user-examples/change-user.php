<?php

require_once "bootstrap.php";

$query = $entityManager->createQuery("UPDATE App\Entities\User u SET u.name = concat(u.name, ' Silva') WHERE u.id > 2");
$result = $query->getResult();

var_dump($result);

