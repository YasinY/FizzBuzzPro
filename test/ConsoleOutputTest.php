<?php
declare(strict_types=1);

namespace YasinYazici\SoftwareEngineering\Tests;

use PHPUnit\Framework\TestCase;
use YasinYazici\SoftwareEngineering\Console\ConsoleOutput;

class ConsoleOutputTest extends TestCase
{
    /**
     * @var ConsoleOutput
     */
    private ConsoleOutput $consoleOutput;

    public function setUp(): void
    {
        $this->consoleOutput = new ConsoleOutput();
    }

    /**
     * @return void
     */
    public function testConsoleOutput(): void
    {
        $this->consoleOutput->outputToConsole("test");
        self::expectOutputString("test" . PHP_EOL);
    }
}