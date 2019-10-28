<?php

require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = [__DIR__."/src/Entities"];
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);

$params = [
    'url' => "mysql://homestead:secret@192.168.10.10/doctrine"
];

$entityManager = EntityManager::create($params, $config);