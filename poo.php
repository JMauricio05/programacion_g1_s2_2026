<?php

interface DatosComplementarios
{
    public function get_codigo(): string;
    public function get_dato(): array;
}

abstract class Informacion{
    private string $codigo;

    public abstract function get_datos(string $codigo): array;

    public function toString():string{
        return "El codigo es ". $this->codigo;
    }
    
}


class Persona extends Informacion
{
    // public string|null|int $nombre = null;
    //public   private    protected
    private string $nombre;
    private int $cons_codigo;

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function get_nombre(): string
    {
        return $this->nombre;
    }

    function set_nombre(string $valor)
    {
        $this->nombre = $valor;
    }

    function get_cons_codigo(): int
    {
        return $this->cons_codigo;
    }
    function set_cons_codigo(int $value)
    {
        $this->cons_codigo = $value;
    }

    public function get_datos(string $codigo): array{
        return [
            "codigo" => $codigo,
            "nombre" => $this->nombre
        ];
    }
}

class Estudiante extends Persona implements DatosComplementarios
{
    public function __construct()
    {
        return parent::__construct("");
    }

    public function get_codigo(): string
    {
        return "E" . $this->get_cons_codigo();
    }
    public function get_dato(): array
    {
        return $this->get_datos($this->get_codigo());
    }
}

class Docente extends Persona implements DatosComplementarios
{

    public function __construct()
    {
        return parent::__construct("");
    }

    public function get_codigo(): string
    {
        return "D" . $this->get_cons_codigo();
    }
    public function get_dato(): array
    {
       return $this->get_datos($this->get_codigo());
    }
}

$persona = new Persona("Pepe");
// $persona->nombre = "Pepe";
// $persona->set_nombre("Pepe Perez");
echo $persona->get_nombre();

$estudiante = new Estudiante();
$estudiante->set_nombre("Ana");
$estudiante->set_cons_codigo(12345);
echo '<br>' . $estudiante->get_nombre();
echo '<br>' . $estudiante->get_codigo();

$docente = new Docente();
$docente->set_nombre("Esteban");
$docente->set_cons_codigo(7894);
echo '<br>' . $docente->get_nombre();
echo '<br>' . $docente->get_codigo();
