<?php
namespace app\controllers\users;

use app\models\entities\User;
use app\models\repositories\users_repository\UsersRespositoryInterface;

class UsersController implements UsersControllerInterface{
        
    private UsersRespositoryInterface $user_model;

    public function __construct(UsersRespositoryInterface $user_model)
    {
        $this->user_model = $user_model;
    }

    public function get_users_all(): array{
        return $this->user_model->get_users();
    }

    public function save_user(array $request): bool{
        $user = new User(
            0,
            $request['nombre'],
            $request['username'],
            $request['password']
        );
        return $this->user_model->save_new_user($user);
    }
}