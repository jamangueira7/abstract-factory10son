<?php
/**
 * Created by PhpStorm.
 * User: Mangueira
 * Date: 19/04/2018
 * Time: 18:38
 */

namespace SON\FactoryMethod;


class Triangle implements IProduct
{
    private $directory = '/root/';
    public function getImage()
    {
        $this->directory .'/tringle.png';
    }
    public function setDirectory(string $directory)
    {
        $this->directory .= $directory;
    }
}
