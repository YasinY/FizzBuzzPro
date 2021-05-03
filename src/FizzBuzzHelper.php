<?php
declare(strict_types=1);

namespace YasinYazici\SoftwareEngineering;

use YasinYazici\SoftwareEngineering\Arithmetics\RemainderExistence;

class FizzBuzzHelper
{
    /** @var int */
    private int $fizzTriggerNumber;

    /** @var int */
    private int $buzzTriggerNumber;

    /** @var RemainderExistence */
    private RemainderExistence $remainderExistence;

    /**
     * FizzBuzzHelper constructor.
     * @param int $fizzTriggerNumber
     * @param int $buzzTriggerNumber
     */
    public function __construct(int $fizzTriggerNumber, int $buzzTriggerNumber)
    {
        $this->fizzTriggerNumber = $fizzTriggerNumber;
        $this->buzzTriggerNumber = $buzzTriggerNumber;
        $this->remainderExistence = new RemainderExistence();
    }

    /**
     * @param int $number
     * @return bool
     */
    public function isFizz(int $number): bool
    {
        return $this->remainderExistence->isDivisibleBy($number, $this->fizzTriggerNumber);
    }

    /**
     * @param int $number
     * @return bool
     */
    public function isBuzz(int $number): bool
    {
        return $this->remainderExistence->isDivisibleBy($number, $this->buzzTriggerNumber);
    }

    /**
     * @param int $number
     * @return bool
     */
    public function isFizzBuzz(int $number): bool
    {
        return $this->remainderExistence->isDivisibleBy($number, $this->fizzTriggerNumber * $this->buzzTriggerNumber);
    }
}