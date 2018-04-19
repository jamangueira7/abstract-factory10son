<?php
require __DIR__ . '/../vendor/autoload.php';

$original = new SON\Prototype\ConcretePrototype;

$original->setTitle('PHP Essencial');
$original->setAuthor('Joao de Tal');

var_dump($original);


$clone1 = clone($original);

$clone1->setTitle('Node Essencial');
//$clone1->setAuthor('Joao de Tal');

var_dump($clone1);


$clone2 = clone($clone1);

$clone2->setTitle('Mongo Essencial');
//$clone2->setAuthor('Joao de Tal');

var_dump($clone2);

$clone3 = clone($original);

$clone3->setTitle('Laravel Essencial');
//$clone3->setAuthor('Joao de Tal');

var_dump($clone3);
