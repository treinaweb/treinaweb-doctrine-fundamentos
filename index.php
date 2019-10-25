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

$conn = DriverManager::getConnection($url, $config);
$queryBuilder = $conn->createQueryBuilder();

$result = $queryBuilder
                ->select('name')
                ->from('user');

if (isset($_GET['id'])) {
    $queryBuilder->where('id = :myid')
                 ->setParameter('myid', $_GET['id']);  
}                  
                
$result = $queryBuilder->execute();

while ($row = $result->fetch()) {
    echo $row['name'] . "<br>";
}


//var_dump($conn);