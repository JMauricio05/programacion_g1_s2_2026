<?php

namespace app\controllers\users;

use app\models\entities\User;
use app\models\repositories\users_repository\UsersRespositoryInterface;

class UsersController implements UsersControllerInterface
{

    private UsersRespositoryInterface $user_model;

    public function __construct(UsersRespositoryInterface $user_model)
    {
        $this->user_model = $user_model;
    }

    public function get_users_all(): array
    {
        return $this->user_model->get_users();
    }

    public function save_user(array $request): bool
    {
        $user = new User(
            0,
            $request['nombre'],
            $request['username'],
            $request['password']
        );
        return $this->user_model->save_new_user($user);
    }

    public function update_user(array $request): bool
    {
        $user = new User(
            $request['id'],
            $request['nombre'],
            $request['username'],
            empty($request['password']) ? "" : $request['password']
        );
        return $this->user_model->update_user($user);
    }

    public function get_user(int $id): User
    {
        return $this->user_model->find_user_by_id($id);
    }
}
