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

    public function get_users(): array
    {
        $sql = "select * from usuarios";
        $users_db = $this->users_db->query_select($sql);
        // $users = [];
        // foreach ($users_db as $row) {
        //     array_push($users, UserMappers::to_entity($row));
        // }
        // return $users;
        return array_map(
            fn($row): User => UserMappers::to_entity($row),
            $users_db
        );
    }

    public function save_new_user(User $user): bool
    {
        $sql = "insert into usuarios (nombre, username, password)values";
        $sql .= "('" . $user->get_name() . "','" . $user->get_username() . "','" . $user->get_password() . "')";
        return $this->users_db->query($sql);
    }

    public function update_user(User $user): bool
    {
        $sql = "update usuarios set ";
        $sql .= " nombre='" . $user->get_name() . "', ";
        $sql .= " username='" . $user->get_username() . "' ";
        if (!empty($user->get_password())) {
            $sql .= ", password='" . $user->get_password() . "' ";
        }
        $sql .= " where id=" . $user->get_id();
        return $this->users_db->query($sql);
    }

    public function find_user_by_id(int $id): User
    {
        $sql = "select * from usuarios where id=$id";
        $users = $this->users_db->query_select($sql);
        if (count($users) == 0) {
            throw new Exception("Usuario no encontrado", 2);
        }
        return UserMappers::to_entity($users[0]);
    }

    public function delete_user(int $id): bool
    {
        $sql = "delete from usuarios where id=$id";
        return $this->users_db->query($sql);
    }
}
