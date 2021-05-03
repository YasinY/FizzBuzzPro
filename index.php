<?php
declare(strict_types=1);

require 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use YasinYazici\SoftwareEngineering\Console\ConsoleOutput;
use YasinYazici\SoftwareEngineering\FizzBuzzHelper;
use YasinYazici\SoftwareEngineering\NumberGenerator;


/** @var NumberGenerator */
$numberGenerator = new NumberGenerator();

/** @var iterable */
$iterableNumbers = $numberGenerator->generate(1, 100);

/** @var FizzBuzzHelper */
$fizzBuzzHelper = new FizzBuzzHelper(3, 5);

/** @var ConsoleOutput */
$consoleOutput = new ConsoleOutput();

foreach ($iterableNumbers as $iterableNumber) {
    if($fizzBuzzHelper->isFizzBuzz($iterableNumber)) {
        $consoleOutput->outputToConsole("FizzBuzz");
        continue;
    }
    if($fizzBuzzHelper->isFizz($iterableNumber)) {
        $consoleOutput->outputToConsole("Fizz");
        continue;
    }
    if($fizzBuzzHelper->isBuzz($iterableNumber)) {
        $consoleOutput->outputToConsole("Buzz");
        continue;
    }
    $numberAsString = (string) $iterableNumber;
    $consoleOutput->outputToConsole($numberAsString);
}