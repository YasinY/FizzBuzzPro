<?php
declare(strict_types=1);


namespace YasinYazici\SoftwareEngineering\Exception;


use Throwable;

class UnsupportedModuloValueException extends \InvalidArgumentException
{

    /**
     * UnsupportedModuloValueException constructor.
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($code = 2, Throwable $previous = null)
    {
        parent::__construct("Value of 0 at Modulo operations are not supported here.", $code, $previous);
    }
}