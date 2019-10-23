<?php

require_once "vendor/autoload.php";

use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Configuration;

$params = [
    'dbname' => 'doctrine',
    'user' => 'homestead',
    'password' => 'secret',
    'host' => '192.168.10.10',
    'driver' => 'pdo_mysql'  
];

$url = [
    'url' => 'mysql://homestead:secret@192.168.10.10/doctrine'
];

$config = new Configuration;

$conn = DriverManager::getConnection($params, $config);

var_dump($conn);