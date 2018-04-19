<?php
/**
 * Created by PhpStorm.
 * User: Mangueira
 * Date: 19/04/2018
 * Time: 09:53
 */

namespace SON\AbstractFactory;


class LivroMongo implements IEditoraA, IEditoraB
{
    private $title = null;
    private $author = null;
    private $pages = null;

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function setPages($author)
    {
        $this->pages = $author;
    }

    public function getTitle(): string
    {
       return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getPages(): string
    {
        return $this->pages;
    }
}
