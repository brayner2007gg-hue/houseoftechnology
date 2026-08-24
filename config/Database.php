<?php

class Database
{
    private $host = "localhost";
    private $db_name = "house_technology";
    private $username = "root";
    private $password = "";

    public function conectar()
    {
        return new PDO(
            "mysql:host={$this->host};dbname={$this->db_name}",
            $this->username,
            $this->password
        );
    }
}