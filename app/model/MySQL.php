<?php

class MySQL 
{
    private $host;
    private $user;
    private $pass;
    private $port;
    private $db;
    
    public function __construct() 
    {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->pass = '';
        $this->port = '3306';
        $this->db   = 'banco_ihm';
    }
    
    public function Conexao()
    {
        return mysqli_connect(
            $this->host, 
            $this->user, 
            $this->pass, 
            $this->db, 
            $this->port);
    }
}
