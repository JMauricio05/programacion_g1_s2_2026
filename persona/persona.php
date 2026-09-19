<?php

class Persona
{
    private string $name;
    private int $year;

    public function __construct(string $nombre, int $edad)
    {
        $this->name = $nombre;
        $this->year = $edad;
    }

    function get(string $prop)
    {
        return $this->{$prop};
    }

    function esMayor(): bool
    {
        return $this->year >= 18;
    }
}
