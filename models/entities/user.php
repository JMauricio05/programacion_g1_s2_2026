<?php

namespace app\models\entities;

class User
{
    private int $id;
    private string $name;
    private string $username;
    private string $password;

    public function __construct(
        int $id,
        string $name,
        string $username,
        string $password = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->username = $username;
        $this->password = $password;
    }


    public function get_id(): int
    {
        return $this->id;
    }
    public function get_name(): string
    {
        return $this->name;
    }
    public function get_username(): string
    {
        return $this->username;
    }
    public function get_password(): string
    {
        return $this->password;
    }
}
