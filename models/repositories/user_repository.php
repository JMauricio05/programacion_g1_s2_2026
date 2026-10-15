<?php

namespace app\models\repository;

use app\models\entities\User;
use app\models\database\UserDBImpl;
use app\models\mappers\UserMappers;
use Exception;

class UserRepository implements UserRepositoryImpl
{
    private UserDBImpl $user_db;

    public function __construct(UserDBImpl $user_db)
    {
        $this->user_db = $user_db;
    }

    public function get_users(): array
    {
        $sql = "select * from usuarios";
        $result = $this->user_db->query($sql);
        if ($result->num_rows == 0) {
            $result->close();
            return [];
        }
        $users = [];
        while ($row = $result->fetch_assoc()) {
            $user = UserMappers::get_user_entity($row);
            array_push($users, $user);
        }
        $result->close();
        return $users;
    }

    public function get_user(int $id): User
    {
        $sql = "select * from usuarios where id=$id";
        $result = $this->user_db->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $user = UserMappers::get_user_entity($row);
                $result->close();
                return $user;
            }
        }
        throw new Exception("No se encontro ningun registro con el id=$id");
    }

    public function find_user(string $username, string $password): User
    {
        $sql = "select * from usuarios where username='$username' and password='$password'";
        $result = $this->user_db->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $user = UserMappers::get_user_entity($row);
                $result->close();
                return $user;
            }
        }
        throw new Exception("Los datos del usuario $username no coinciden");
    }
}
