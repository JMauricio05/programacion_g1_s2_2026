<?php

namespace app\models\repositories\users_repository;

use app\models\database\UsersDBInterface;
use app\models\entities\User;
use app\models\mappers\UserMappers;
use Exception;

class UsersRespository implements UsersRespositoryInterface
{
    private UsersDBInterface $users_db;

    public function __construct(UsersDBInterface $users_db)
    {
        $this->users_db = $users_db;
    }

    public function find_user(string $username, string $password): User
    {
        $sql = "select * from usuarios where username='$username' and password='$password'";
        $users = $this->users_db->query_select($sql);
        if (count($users) == 0) {
            throw new Exception("Usuario no encontrado", 2);
        }
        return UserMappers::to_entity($users[0]);
    }
}
