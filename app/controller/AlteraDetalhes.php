<?php

include('../TO/TO_Livro.php');
include('../model/Model_livros.php');

$to_livro     = new TO_Livro();
$model_livros = new Model_livros();

$titulo_livro = filter_input(INPUT_POST, 'titulo_livro');
$autor_livro  = filter_input(INPUT_POST, 'autor_livro');
$isbn_livro   = filter_input(INPUT_POST, 'isbn_livro');
$desc_livro   = filter_input(INPUT_POST, 'desc_livro');

try
{
    $to_livro->setTitulo_livro($titulo_livro);
    $to_livro->setAutor_livro($autor_livro);
    $to_livro->setIsbn_livro($isbn_livro);
    $to_livro->setDesc_livro($desc_livro);

    echo $model_livros->AlteraLivro($to_livro);
}
catch(Exception $e)
{
    echo 0;
}