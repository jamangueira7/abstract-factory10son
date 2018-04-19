<?php
require __DIR__ . '/../vendor/autoload.php';

$abstract_factoryA = new SON\AbstractFactory\EditoraA();
$abstract_factoryB = new SON\AbstractFactory\EditoraB();

$livro_phpA = $abstract_factoryA->makeLivroLinguagem();
$livro_bancoA = $abstract_factoryA->makeLivroBanco();
$livro_phpB = $abstract_factoryB->makeLivroLinguagem();
$livro_bancoB = $abstract_factoryB->makeLivroBanco();

echo '########Editora A########';
echo PHP_EOL;
echo '#Titulo - '.$livro_phpA->getTitle();
echo PHP_EOL;
echo '#Author - '.$livro_phpA->getAuthor();
echo PHP_EOL;
echo '#Titulo - '.$livro_bancoA->getTitle();
echo PHP_EOL;
echo '#Author - '.$livro_bancoA->getAuthor();
echo PHP_EOL;

echo '########Editora B########';
echo PHP_EOL;
echo '#Titulo - '.$livro_phpB->getTitle();
echo ' - #Pages - '.$livro_phpB->getPages();
echo PHP_EOL;
echo '#Author - '.$livro_phpB->getAuthor();
echo PHP_EOL;
echo '#Titulo - '.$livro_bancoB->getTitle();
echo ' - #Pages - '.$livro_bancoB->getPages();
echo PHP_EOL;
echo '#Author - '.$livro_bancoB->getAuthor();
echo PHP_EOL;
