<?php
namespace app\controllers\users;

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
}