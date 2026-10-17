<?php

namespace app\controllers\sessions;

use app\models\entities\User;

interface SessionsControllerInterface
{
    public function find_user(string $username, string $password): User|null;
    public function save_session(User $user);
}
