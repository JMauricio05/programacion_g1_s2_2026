<?php

namespace app\controllers\exceptions;

use Exception;
use Throwable;

class DataEmpty extends Exception
{
    public function __construct(string $message, $code = 0, ?Throwable $previous = null)
    {
        // Llamamos al constructor de la clase padre
        parent::__construct($message, $code, $previous);
    }
}
