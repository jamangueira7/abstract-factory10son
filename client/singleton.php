<?php
require __DIR__ . '/../vendor/autoload.php';

$con = SON\Singleton\Singleton::getInstance();
var_dump($con->getCounter());
var_dump($con->getCounter());


$con2 = SON\Singleton\Singleton::getInstance();
var_dump($con2->getCounter());
var_dump($con2);
