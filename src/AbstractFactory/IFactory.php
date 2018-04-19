<?php
/**
 * Created by PhpStorm.
 * User: Mangueira
 * Date: 19/04/2018
 * Time: 09:49
 */

namespace SON\AbstractFactory;


interface IFactory
{
    public function makeLivroLinguagem();
    public function makeLivroBanco();
}
