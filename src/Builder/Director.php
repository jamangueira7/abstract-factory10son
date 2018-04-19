<?php
/**
 * Created by PhpStorm.
 * User: Mangueira
 * Date: 19/04/2018
 * Time: 17:49
 */

namespace SON\Builder;


class Director
{
    public function __construct(IBuiler $builer)
    {
        $this->builder = $builer;
    }
    public function setQuery($table)
    {
        $this->builder->setTable($table);
        $this->builder->setQuery();
        return $this->builder->getResult();
    }

}
