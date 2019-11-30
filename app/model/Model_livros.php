<?php

class Model_livros
{
    public function Cadastra_livros(TO_Livro $livro)
    {
        require('MySQL.php');
        $mysql  = new MySQL();

        try
        {
            $isbn          = $livro->getIsbn_livro();
            $titulo_livro  = $livro->getTitulo_livro();
            $autor         = $livro->getAutor_livro();
            $descricao     = $livro->getDesc_livro();
    
            $query = "INSERT 
                      INTO livros(isbn, titulo_livro, autor, descricao) 
                      VALUES('$isbn','$titulo_livro','$autor','$descricao')";
    
            echo mysqli_query($mysql->Conexao(), $query);
        }
        catch(Exception $ex)
        {
            echo 0;
        }
    }

    public function Delete_livros($isbn)
    {
        require('MySQL.php');
        $mysql  = new MySQL();

        try
        {
            $query = "UPDATE livros
                      SET    is_ativo = 0 WHERE isbn = '$isbn'";

            echo mysqli_query($mysql->Conexao(), $query);
        }
        catch(Exception $ex)
        {

        }
    }

    public function BuscaInfo()
    {
        require('MySQL.php');
        $mysql  = new MySQL();
    }
}