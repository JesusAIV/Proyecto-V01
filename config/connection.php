<?php

require_once "constantes.php";

class Connection
{
    private $hostDB;
    private $nameDB;
    private $userDB;
    private $passDB;

    private $conn;

    public function __construct()
    {
        $this->hostDB = DB_HOST;
        $this->nameDB = DB_DATABASE;
        $this->userDB = DB_USERNAME;
        $this->passDB = DB_PASSWORD;
    }

    public function connect()
    {
        try {
            $dsn ="mysql:host={$this->hostDB};dbname={$this->nameDB}";

            $options = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            );

            $this->conn = new PDO($dsn,$this->userDB,$this->passDB,$options);

            return $this->conn;

        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function getPDO()
    {
        return $this->conn;
    }
}
