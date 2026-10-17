<?php

namespace app\controllers\sessions;

use app\models\entities\User;
use app\models\repositories\users_repository\UsersRespositoryInterface;
use Exception;

class SessionsController implements SessionsControllerInterface
{
    private UsersRespositoryInterface $user_model;

    public function __construct(UsersRespositoryInterface $user_model)
    {
        $this->user_model = $user_model;
    }

    public function find_user(string $username, string $password): User|null
    {
        try {
            if (empty($username) || empty($password)) {
                throw new Exception("Username o password vacíos", 1);
            }
            $user = $this->user_model->find_user($username, $password);
            return $user;
        } catch (Exception $ex) {
            if ($ex->getCode() == 1 || $ex->getCode() == 2) {
                return null;
            } else {
                throw new Exception($ex->getMessage());
            }
        }
    }

    public function save_session(User $user)
    {
        if(empty($user)){
            throw new Exception("Usuario no valido");
        }
        session_start();
        $_SESSION["user"] = $user->get_name();
    }
}
