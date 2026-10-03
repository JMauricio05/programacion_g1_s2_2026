<?php

namespace app\models\repository;

use app\models\entities\User;
use app\models\database\UserDBImpl;

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
            return [];
        }
        $users = [];
        
        return $users;
    }
    public function get_user(int $id): User
    {
        return new User();
    }
    public function find_user(string $username, string $password): User
    {
        return new User();
    }
}
