<?php

namespace app\controllers\users;

interface UsersControllerInterface
{
    public function get_users_all(): array;
    public function save_user(array $request): bool;
}
