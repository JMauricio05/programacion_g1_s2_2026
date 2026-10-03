<?php

namespace app\models\database;

use mysqli_result;

interface UserDBImpl{
    public function query(string $sql): mysqli_result|bool;
    public function close();
}