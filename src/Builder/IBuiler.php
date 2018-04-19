<?php
/**
 * Created by PhpStorm.
 * User: Mangueira
 * Date: 19/04/2018
 * Time: 17:48
 */

namespace SON\Builder;


interface IBuiler
{
    public function setTable(string $table);
    public function setQuery();
    public function getResult():Product;
}
