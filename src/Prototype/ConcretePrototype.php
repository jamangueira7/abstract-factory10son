<?php
/**
 * Created by PhpStorm.
 * User: Mangueira
 * Date: 19/04/2018
 * Time: 19:02
 */

namespace SON\Prototype;


class ConcretePrototype
{
    public $title;
    public $author;
    public $counter;

    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function __clone()
    {
        $this->counter ++;

        if($this->counter > 1){
            throw new \Exception("Você está indo longe demais! ");
        }
    }
}
