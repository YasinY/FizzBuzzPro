<?php
declare(strict_types=1);


namespace YasinYazici\SoftwareEngineering\Exception;

use Throwable;

class NotDivisibleByZeroException extends \InvalidArgumentException
{

    /**
     * NotPermittedModuloError constructor.
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($code = 1, Throwable $previous = null)
    {
        parent::__construct("Modulo by Zero not possible.", $code, $previous);
    }
}