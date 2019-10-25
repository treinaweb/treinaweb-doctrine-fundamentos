<?php

require_once "vendor/autoload.php";

use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Configuration;
use Doctrine\DBAL\Schema\Schema;

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

$schema = new Schema;

$articleTable = $schema->createTable('article');

$articleTable->addColumn('id', 'integer', ['unsigned' => true]);
$articleTable->addColumn('subject', 'string', ['length' => 100]);
$articleTable->addColumn('content', 'text');
$articleTable->setPrimaryKey(["id"]);

$articleTable->addColumn('user_id', 'integer');
$articleTable->addForeignKeyConstraint('user', ["user_id"], ["id"]);

$queries = $schema->toSql(new \Doctrine\DBAL\Platforms\MySqlPlatform);

foreach ($queries as $query) {
    $conn->query($query);
}

var_dump($queries);

