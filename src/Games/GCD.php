<?php

/**
 * GCD File Doc Comment
 *
 * PHP version 7.4
 *
 * @category BrainGames
 * @package  GCD
 * @author   toridnc <toridnc@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     https://github.com/toridnc/php-project-lvl1/tree/main
 */

namespace Src\Games\GCD;

use function Brain\Games\Engine\engine;

/**
 * Showing two random numbers.
 * Need to calculate and write the greatest common divisor of these numbers.
 *
 * Only 3 rounds.
 *
 * @param integer $a 1 number
 * @param integer $b 2 number
 *
 * @return int
 */
function gcd(int $a, int $b)
{
    return $b ? gcd($b, $a % $b) : $a;
}

/**
 * Run GCD games.
 *
 * Only 3 rounds.
 *
 * @return string
 */
function runGcd()
{
    $description = 'Find the greatest common divisor of given numbers.';

    $questions = [];
    $correctAnswers = [];

    $rounds = 3;
    for ($i = 0; $i < $rounds; $i++) {
        $num1 = rand(0, 10);
        $num2 = rand(0, 10);
        $question = "{$num1} {$num2}";
        $questions[$i] = $question;
        $correctAnswers[$i] = (string) gcd($num1, $num2);
    }

    engine($description, $questions, $correctAnswers);
}
