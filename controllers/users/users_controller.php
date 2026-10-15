<?php

namespace app\controllers\users;

use app\models\entities\User;
use app\models\repository\UserRepositoryImpl;
use Exception;

class UsersController implements UserControllerImpl
{

    private UserRepositoryImpl $user_repository;

    public function __construct(UserRepositoryImpl $user_repository)
    {
        $this->user_repository = $user_repository;
    }

    public function find_user(string $username, string $password): User|null
    {
        try {
            if (empty($username) || empty($password)) {
                throw new Exception("Datos vacios");
            }
            return $this->user_repository->find_user($username, $password);
        } catch (Exception $ex) {
            return null;
        }
    }
}
