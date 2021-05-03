<?php
declare(strict_types=1);


namespace YasinYazici\SoftwareEngineering\Tests;


use PHPUnit\Framework\TestCase;
use YasinYazici\SoftwareEngineering\Arithmetics\RemainderExistence;
use YasinYazici\SoftwareEngineering\Exception\NotDivisibleByZeroException;
use YasinYazici\SoftwareEngineering\Exception\UnsupportedModuloValueException;

class RemainderExistenceTest extends TestCase
{
    /** @var RemainderExistence */
    private RemainderExistence $remainderExistence;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->remainderExistence = new RemainderExistence();
    }

    /**
     * @return void
     */
    function testInvalidXValue(): void
    {

        self::expectException(UnsupportedModuloValueException::class);
        $this->remainderExistence->isDivisibleBy(0, 3);
    }

    /**
     * @return void
     */
    function testInvalidYValue(): void
    {
        self::expectException(NotDivisibleByZeroException::class);
        $this->remainderExistence->isDivisibleBy(3, 0);
    }
}