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
use function gmp\gmp_gcd;
use function gmp\gmp_strval;

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
        $gcd = gmp_gcd($num1, $num2);
        $correctAnswers[$i] = gmp_strval($gcd);
        $questions[$i] = $question;
    }

    engine($description, $questions, $correctAnswers);
}
