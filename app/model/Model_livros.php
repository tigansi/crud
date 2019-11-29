<?php


class Model_livros
{
    public function Cadastra_livros(TO_Livro $livro)
    {
        $isbn      = $livro->getIsbn_livro();
        $nm_livro  = $livro->getTitulo_livro();
        $autor     = $livro->getAutor_livro();
        $descricao = $livro->getDesc_livro();

        include('Conexao.php');
        $db = new Conexao();
        $db->conectaDB()->query("INSERT INTO livros(isbn, nm_livro, autor, descricao) 
                                 VALUES('$isbn','$nm_livro','$autor','$descricao')");  
        
        $db->conectaDB()->execute();
    }
}