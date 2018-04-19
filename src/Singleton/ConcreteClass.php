<?php
/**
 * Created by PhpStorm.
 * User: Mangueira
 * Date: 19/04/2018
 * Time: 19:17
 */

namespace SON\Singleton;


class ConcreteClass
{
    private  $counter = 0;
    public function __construct()
    {
        var_dump('construiu!!!');
    }

    public function __clone()
    {
        var_dump('clonou!!!');
    }

    public function getCounter()
    {
        $this->counter ++;
        return $this->counter;
    }
}
