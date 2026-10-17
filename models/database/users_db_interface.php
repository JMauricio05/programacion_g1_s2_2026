<?php

namespace app\models\database;


interface UsersDBInterface
{
    public function query_select(string $sql):array;
}
