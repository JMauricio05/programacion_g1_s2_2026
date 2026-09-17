<?php

class Persona {
    // public string|null|int $nombre = null;
    public string $nombre;

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }
}

$persona = new Persona("Pepe");
// $persona->nombre = "Pepe";

echo $persona->nombre;


