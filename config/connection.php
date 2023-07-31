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
        } catch (PDOException $e) {

        }
    }
}
