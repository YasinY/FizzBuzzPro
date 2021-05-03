<?php
declare(strict_types=1);


namespace YasinYazici\SoftwareEngineering\Tests;


use PHPUnit\Framework\TestCase;
use YasinYazici\SoftwareEngineering\NumberGenerator;

class NumberGeneratorTest extends TestCase
{

    /** @var iterable */
    private iterable $generatedNumbers;

    /**
     * @return void
     */
    public function setUp(): void {
        $numberGenerator = new NumberGenerator();
        $this->generatedNumbers = $numberGenerator->generate(1, 10);
    }

    /**
     * @dataProvider provideExampleNumbers
     * @param iterable $providedNumbers
     */
    public function testGenerationFrom1to10(iterable $providedNumbers): void {
        for($i = 0; $i < 10; $i++) {
            $generatedNumberElement = $this->generatedNumbers[$i];
            $providedNumberElement = $providedNumbers[$i];
            self::assertSame($generatedNumberElement, $providedNumberElement);
        }
    }

    /**
     * @return int[][][]
     */
    public function provideExampleNumbers(): iterable
    {
        return [
            "Numbers from 1 to 10" => [[1, 2, 3, 4, 5, 6, 7, 8, 9, 10]]
        ];
    }
}