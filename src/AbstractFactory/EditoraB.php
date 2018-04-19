<?php
/**
 * Created by PhpStorm.
 * User: Mangueira
 * Date: 19/04/2018
 * Time: 09:55
 */

namespace SON\AbstractFactory;


class EditoraB implements IFactory
{
    private $linguagem;
    private $banco;
    public function __construct()
    {
        $this->linguagem = new LivroNode();
        $this->banco = new LivroMongo();
    }

    public function makeLivroLinguagem()
    {
        $this->linguagem->setTitle('Node para amadores');
        $this->linguagem->setAuthor('Carlos de tal');
        $this->linguagem->setPages('350 paginas');
        return $this->linguagem;
    }

    public function makeLivroBanco()
    {
        $this->banco->setTitle('MongoDB expert');
        $this->banco->setAuthor('Alberto de tal');
        $this->banco->setPages('290 paginas');
        return $this->banco;
    }
}
