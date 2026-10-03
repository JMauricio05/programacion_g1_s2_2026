<?php

namespace app\models\services\database;

interface UserDBImpl{
    public function query(string $sql);
    public function close();
}