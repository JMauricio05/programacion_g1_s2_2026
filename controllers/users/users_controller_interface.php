<?php

namespace app\controllers\users;

use app\models\entities\User;

interface UsersControllerInterface
{
    public function get_users_all(): array;
    public function save_user(array $request): bool;
    public function update_user(array $request): bool;
    public function get_user(int $id): User;
}
