<?php

include_once __DIR__. '../../config/config.php';

class Database {
    private $servename;
    private $user;
    private $password;
    private $dbname;
    private $conn;

    // Método construtor

    public function __construct()
    {
        $this->servename = DB_HOST;
        $this->user = DB_USER;
        $this->password = DB_PASSWORD;
        $this->dbname = DB_NAME;
    }

}

?>