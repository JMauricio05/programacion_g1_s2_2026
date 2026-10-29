<?php

namespace App\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\Collection;

class UsersController
{
    function get_users(): Collection
    {
        return User::all();
    }

    function find_user(string $username, string $password): User
    {
        // $user = User::where("username", $username)
        //     ->where("password", $password)->get();
        // if (count($user) == 0) {
        //     throw new Exception("Usuario no encontrado", 1);
        // }
        // return $user[0];
        return User::where("username", $username)->where("password", $password)->firstOrFail();
    }

    function create(array $data): User
    {
        $user = new User();
        $user->nombre = $data["nombre"];
        $user->username = $data["username"];
        $user->password = $data["password"];
        $user->save();
        return $user;
    }

    function update(int $id, array $data):User{
        $user = User::findOrFail($id);
        $user->nombre = $data["nombre"];
        $user->username = $data["username"];
        $user->password = $data["password"];
        $user->save();
        return $user;
    }

    function delete(int $id):User{
        $user = User::findOrFail($id);
        $user->delete();
        return $user;
    }
}
