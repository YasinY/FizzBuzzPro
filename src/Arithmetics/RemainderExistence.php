<?php
declare(strict_types=1);

namespace YasinYazici\SoftwareEngineering\Arithmetics;

use YasinYazici\SoftwareEngineering\Exception\NotDivisibleByZeroException;
use YasinYazici\SoftwareEngineering\Exception\UnsupportedModuloValueException;

/**
 * Arithmetic (from the Greek ἀριθμός arithmos, 'number' and τική [τέχνη], tiké [téchne], 'art' or 'craft')
 * is a branch of mathematics that consists of the study of numbers, especially the properties of the traditional operations on
 * them—addition, subtraction, multiplication, division, exponentiation and extraction of roots.
 * Arithmetic is an elementary part of number theory, and number theory is considered to be one of the top-level divisions of modern mathematics,
 * along with algebra, geometry, and analysis. The terms arithmetic and higher arithmetic were used until the beginning of
 * the 20th century as synonyms for number theory, and are sometimes still used to refer to a wider part of number theory.
 *
 * Class RemainderExistence
 * @package YasinYazici\SoftwareEngineering\Arithmetics
 */
class RemainderExistence
{

    /** @var int */
    public const ARITHMETIC_REMAINDER = 0;

    /**
     * @param int $x
     * @param int $y
     * @return bool
     */
    public function isDivisibleBy(int $x, int $y): bool
    {
        if($x === 0) {
            throw new UnsupportedModuloValueException();
        }

        if($y == 0) {
            throw new NotDivisibleByZeroException();
        }

        return self::ARITHMETIC_REMAINDER === ($x % $y);
    }

}