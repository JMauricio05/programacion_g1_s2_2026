<?php

namespace app\models\repositories\users_repository;

use app\models\entities\User;

interface UsersRespositoryInterface
{
    public function find_user(string $username, string $password): User;

    public function get_users(): array;

    public function save_new_user(User $user): bool;
    public function update_user(User $user): bool;
    public function find_user_by_id(int $id): User;
}
