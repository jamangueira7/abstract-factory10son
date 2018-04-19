<?php
/**
 * Created by PhpStorm.
 * User: Mangueira
 * Date: 19/04/2018
 * Time: 09:50
 */

namespace SON\AbstractFactory;


class LivroMySql implements IEditoraA
{

    private $title = null;
    private $author = null;

    public function setTitle(string $title)
    {
        $this->title = $title;
    }
    public function setAuthor(string $author)
    {
        $this->author = $author;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }
}
