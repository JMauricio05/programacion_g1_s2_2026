<?php

namespace app\models\repository;

use app\models\entities\User;

interface UserRepositoryImpl
{
    public function get_users(): array;
    public function get_user(int $id): User;
    public function find_user(string $username, string $password): User;
}
