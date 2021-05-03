<?php
declare(strict_types=1);


namespace YasinYazici\SoftwareEngineering\Console;


class ConsoleOutput
{

    /**
     * @param string $message
     * @return void
     */
    function outputToConsole(string $message): void {
        print $message . \PHP_EOL;
    }

}