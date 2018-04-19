<?php
/**
 * Created by PhpStorm.
 * User: Mangueira
 * Date: 19/04/2018
 * Time: 17:53
 */

namespace SON\Builder;


class PostgresBuilder implements IBuiler
{
    private $query_builder;

    public function __construct()
    {
        $this->query_builder = new Product;
    }

    public function setTable(string $table)
    {
        $this->query_builder->table = $table;
    }
    public function setQuery()
    {
        $this->query_builder->query = Product::POSTGRES_QUERY;
    }
    public function getResult():Product
    {
        return $this->query_builder;
    }
}
