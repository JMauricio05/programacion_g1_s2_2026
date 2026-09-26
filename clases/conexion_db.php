<?php
class ConexionDb
{
    private string $hostDB = "localhost";
    private string $userDB = "root";
    private string $pwdDB = "";
    private string $nameDB = "usuarios_db";

    public function get_conexDB()
    {
        $conexDB = new mysqli(
            $this->hostDB, 
            $this->userDB, 
            $this->pwdDB, 
            $this->nameDB
        );
        if ($conexDB->connect_error) {
            print($conexDB->connect_error);
            die();
        }
        return $conexDB;
    }
}
