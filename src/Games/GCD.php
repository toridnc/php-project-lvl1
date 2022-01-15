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
 * Only 3 rounds.
 * 
 * @return string
 */
function gcd()
{
    $description = 'Find the greatest common divisor of given numbers.';

    $questions = [];
    $correctAnswers = [];

    $rounds = 3;
    for ($i = 0; $i < $rounds; $i++) {
        $num1 = rand(0, 50);
        $num2 = rand(0, 50);
        while ($num1 > 0 && $num2 > 0) {
            if ($num1 > $num2) {
                $num1 %= $num2;
            } else {
                $num2 %= $num1;
            }
        }
        return $num1 + $num2;

        $questions[$i] = $question;
    }

    engine($description, $questions, $correctAnswers);
}
