<?php
/**
 * Created by PhpStorm.
 * User: Mangueira
 * Date: 19/04/2018
 * Time: 18:38
 */

namespace SON\FactoryMethod;


class ConcreteCreator implements ICreator
{
    public function factoryMethod(IProduct $product): IProduct
    {
       $product->setDirectory('images');
       return $product;
    }
}
