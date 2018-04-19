<?php
require __DIR__ . '/../vendor/autoload.php';

$mysql = new SON\Builder\MySqlBuilder;
$postgres = new SON\Builder\PostgresBuilder;

$result1 = (new SON\Builder\Director($mysql))->setQuery('users');
$result2 = (new SON\Builder\Director($postgres))->setQuery('users');
var_dump($result1->getQuery());
var_dump($result2->getQuery());
