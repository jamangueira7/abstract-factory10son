<?php
/**
 * Created by PhpStorm.
 * User: Mangueira
 * Date: 19/04/2018
 * Time: 18:38
 */

namespace SON\FactoryMethod;


class Circle implements IProduct
{
    private $directory;
    public function getImage()
    {
        return $this->directory . '/circle.png';
    }
    public function setDirectory(string $directory)
    {
        $this->directory = $directory;
    }
}
