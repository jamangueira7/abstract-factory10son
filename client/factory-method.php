<?php
require __DIR__ . '/../vendor/autoload.php';

use SON\FactoryMethod\Circle;
use SON\FactoryMethod\Triangle;

class Client
{
    public function __construct()
    {
        $circle = (new SON\FactoryMethod\ConcreteCreator)->factoryMethod(new Circle());
        $triangle = (new SON\FactoryMethod\ConcreteCreator)->factoryMethod(new Triangle());

        echo $circle->getImage();
        echo PHP_EOL;
        echo $triangle->getImage();
    }
}

new Client;
