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
 * Bla-bla
 *
 * @param integer $a 1 number
 * @param integer $b 2 number
 * 
 * @return int
 */
function gcd($a, $b) : int
{
    if ($b === 0) {
        return $a;
    }
    return gcd($b, $a % $b);
}

    /**
     * Bla-bla
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
        $num1 = rand(0, 50);
        $num2 = rand(0, 50);
        $question = "{$num1} {$num2}";
        $questions[$i] = $question;
        $correctAnswers[$i] = (string) gcd($num1, $num2);
    }

    engine($description, $questions, $correctAnswers);
}
