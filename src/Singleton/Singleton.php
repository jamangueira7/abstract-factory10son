<?php
/**
 * Created by PhpStorm.
 * User: Mangueira
 * Date: 19/04/2018
 * Time: 19:17
 */

namespace SON\Singleton;


class Singleton
{
    protected static $instance;

    protected function __construct(){}
    protected function __clone(){}

    public static function getInstance()
    {
        if(self::$instance == null){
            self::$instance = new ConcreteClass;
        }
        return self::$instance;

    }
}
