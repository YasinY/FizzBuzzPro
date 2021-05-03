<?php
declare(strict_types=1);

namespace YasinYazici\SoftwareEngineering;

class NumberGenerator
{

    /**
     * @param int $fromNumber
     * @param int $toNumber
     * @return iterable
     */
    function generate(int $fromNumber, int $toNumber): iterable
    {
        return range($fromNumber, $toNumber);
    }

}