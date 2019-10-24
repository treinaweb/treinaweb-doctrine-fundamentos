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

$filter = '';
if (isset($_GET['id'])) {
    $filter = " where id = " . $_GET['id'];
}

$sql = 'SELECT * FROM user' . $filter;
$result = $conn->query($sql);

while ($row = $result->fetch()) {
    echo $row['name'] . "<br>";
}

//var_dump($conn);