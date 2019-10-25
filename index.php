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



if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = 'SELECT * FROM user where id = :myId';
    $result = $conn->prepare($sql);
    $result->bindValue('myId', $id);
} else {
    $sql = 'SELECT * FROM user';
    $result = $conn->prepare($sql);
}

$result->execute();

while ($row = $result->fetch()) {
    echo $row['name'] . "<br>";
}

//var_dump($conn);