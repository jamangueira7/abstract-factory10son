<?php
/**
 * Created by PhpStorm.
 * User: Mangueira
 * Date: 19/04/2018
 * Time: 18:39
 */

namespace SON\FactoryMethod;



interface ICreator
{
    public function factoryMethod(IProduct $product): IProduct;
}
