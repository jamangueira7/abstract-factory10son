<?php
/**
 * Created by PhpStorm.
 * User: Mangueira
 * Date: 19/04/2018
 * Time: 18:39
 */

namespace SON\FactoryMethod;


interface IProduct
{
    public function getImage();
    public function setDirectory(string $directory);
}
