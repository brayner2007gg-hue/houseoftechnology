<?php

class Database
{
    private $host;
    private $port;
    private $dbname;
    private $username;
    private $password;

    public function __construct()
    {
        $env = parse_ini_file(__DIR__ . '/../.env');

        $this->host = $env['DB-HOST'];
        $this->port = $env['DB-PORT'];
        $this->dbname = $env['DB-NAME'];
        $this->username = $env['DB-USERNAME'];
        $this->password = $env['DB-PASSWORD'];
    }

    public function conectar()
    {
        try {
            $conexion = new PDO(
                "mysql:host={$this->host};port={$this->port};dbname={$this->dbname}",
                $this->username,
                $this->password
            );

            $conexion->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            return $conexion;

        } catch (PDOException $e) {
            echo "Error al conectar: " . $e->getMessage();
        }
    }
}