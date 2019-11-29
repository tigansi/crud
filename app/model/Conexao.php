<?php

class Conexao
{
    public function conectaDB()
    {
        $conexao = new PDO("mysql:host=localhost;dbname=banco_ihm", "root", "");
        return $conexao;
    }
}