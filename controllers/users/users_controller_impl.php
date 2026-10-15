<?php

namespace app\controllers\users;

use app\models\entities\User;

interface UserControllerImpl
{
    public function find_user(string $username, string $password): User|null;
}
