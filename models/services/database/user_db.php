<?php

namespace app\models\services\database;

use mysqli;

class UserDB implements UserDBImpl
{
    private string $hostDB = "localhost";
    private string $userDB = "root";
    private string $pwdDB = "";
    private string $nameDB = "usuarios_db";
    private int $portDB = 3306;

    private mysqli $conexDB;

    public function __construct() {
        $this->init();
    }

    private function init()
    {
        $this->conexDB = new mysqli(
            $this->hostDB,
            $this->userDB,
            $this->pwdDB,
            $this->nameDB,
            $this->portDB
        );
        if ($this->conexDB->connect_error) {
            print($this->conexDB->connect_error);
            die();
        }
    }

    public function query(string $sql)
    {
        return $this->conexDB->query($sql);
    }

    public function close()
    {
        $this->conexDB->close();
    }
}