<?php
/**
 * Created by PhpStorm.
 * User: Mangueira
 * Date: 19/04/2018
 * Time: 09:55
 */

namespace SON\AbstractFactory;


class EditoraA implements IFactory
{
    private $linguagem;
    private $banco;
    public function __construct()
    {
        $this->linguagem = new LivroPHP();
        $this->banco = new LivroMySql();
    }

    public function makeLivroLinguagem()
    {
        $this->linguagem->setTitle('PHP Essencial');
        $this->linguagem->setAuthor('Fulano de tal');
        return $this->linguagem;
    }

    public function makeLivroBanco()
    {
        $this->banco->setTitle('MySQL simplificado');
        $this->banco->setAuthor('Pedro de tal');
        return $this->banco;
    }
}
