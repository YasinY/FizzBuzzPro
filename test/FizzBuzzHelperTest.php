<?php
declare(strict_types=1);


namespace YasinYazici\SoftwareEngineering\Tests;


use PHPUnit\Framework\TestCase;
use YasinYazici\SoftwareEngineering\FizzBuzzHelper;

class FizzBuzzHelperTest extends TestCase
{
    /** @var FizzBuzzHelper */
    private FizzBuzzHelper $fizzBuzzHelper;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->fizzBuzzHelper = new FizzBuzzHelper(3, 5);
    }

    /**
     * @dataProvider fizzBuzzTriggersProvider
     * @param int $key
     * @param bool $value
     * @return void
     */
    function testFizzBuzz(int $key, bool $value): void
    {
        self::assertTrue($this->fizzBuzzHelper->isFizzBuzz($key) === $value);
    }

    /**
     * @dataProvider fizzTriggersProvider
     * @param int $key
     * @param bool $value
     * @return void
     */
    function testFizz(int $key, bool $value): void
    {
        self::assertTrue($this->fizzBuzzHelper->isFizz($key) === $value);
    }

    /**
     * @dataProvider buzzTriggersProvider
     * @param int $key
     * @param bool $value
     * @return void
     */
    function testBuzz(int $key, bool $value): void
    {
        self::assertTrue($this->fizzBuzzHelper->isBuzz($key) === $value);
    }

    /**
     * @dataProvider digitFizzBuzzProvider
     * @param int $key
     * @param bool $value
     * @return void
     */
    function testNorFizzOrBuzzOrFizzBuzz(int $key, bool $value): void
    {
        self::assertTrue($this->fizzBuzzHelper->isFizz($key) !== $value);
        self::assertTrue($this->fizzBuzzHelper->isBuzz($key) !== $value);
        self::assertTrue($this->fizzBuzzHelper->isFizzBuzz($key) !== $value);
    }

    /**
     * @return bool[][]
     */
    function fizzBuzzTriggersProvider(): iterable
    {
        return [
            "15 should be FizzBuzz" => [15, true],
            "30 should be FizzBuzz" => [30, true],
            "45 should be FizzBuzz" => [45, true],
        ];
    }

    /**
     * @return string[][]
     */
    function buzzTriggersProvider(): iterable
    {
        return [
            "5 is Buzz" => [5, true],
            "10 is Buzz" => [10, true],
            "20 is Buzz" => [20, true]
        ];
    }

    /**
     * @return string[][]
     */
    function fizzTriggersProvider(): iterable
    {
        return [
            "3 is Fizz" => [3, true],
            "6 is Fizz" => [6, true],
            "9 is Fizz" => [9, true],
            "12 is Fizz" => [12, true],
        ];
    }

    /**
     * @return string[]
     */
    function digitFizzBuzzProvider(): iterable
    {
        return [
            "1 is neither Fizz, Buzz or FizzBuzz" => [1, true],
            "2 is neither Fizz, Buzz or FizzBuzz" => [2, true],
            "4 is neither Fizz, Buzz or FizzBuzz" => [4, true],
            "7 is neither Fizz, Buzz or FizzBuzz" => [7, true],
            "8 is neither Fizz, Buzz or FizzBuzz" => [8, true],
            "11 is neither Fizz, Buzz or FizzBuzz" => [11, true],
            "13 is neither Fizz, Buzz or FizzBuzz" => [13, true],
            "14 is neither Fizz, Buzz or FizzBuzz" => [14, true],
            "16 is neither Fizz, Buzz or FizzBuzz" => [16, true],
        ];
    }

}