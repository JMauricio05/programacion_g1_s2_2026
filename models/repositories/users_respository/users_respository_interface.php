<?php

namespace app\models\repositories\users_repository;

use app\models\entities\User;

interface UsersRespositoryInterface
{
    public function find_user(string $username, string $password): User;
}
