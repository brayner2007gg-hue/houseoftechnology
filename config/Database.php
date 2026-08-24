<?php

class Database
{
    private $host = "localhost";
    private $db_name = "house_technology";
    private $username = "root";
    private $password = "";

    private $port = "3306";

    public function __construct()
    {
        $env = parse_ini_file(__DIR__ . "/../.env");
        $this->host = $env['DB-HOST'];
        $this->db_name = $env['DB-NAME'];
        $this->username = $env['DB-USERNAME'];
        $this->password = $env['DB-PASSWORD'];
        $this->port = $env['DB-PORT'];
    }

    public function conectar()
    {
        return new PDO(
            "mysql:host={$this->host};dbname={$this->db_name}",
            $this->username,
            $this->password
        );
    }
}