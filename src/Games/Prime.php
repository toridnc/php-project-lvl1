<?php

/**
 * GCD File Doc Comment
 *
 * PHP version 7.4
 *
 * @category BrainGames
 * @package  Prime
 * @author   toridnc <toridnc@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     https://github.com/toridnc/php-project-lvl1/tree/main
 */

namespace Src\Games\Prime;

use function Brain\Games\Engine\engine;

/**
 * Checks if a number is prime
 * The user is shown a random number.
 * 'Yes' if the number is prime, 'no' if it's not.
 *
 * Only 3 rounds.
 *
 * @param $num is a random number
 *
 * @return bool
 */
function isPrime($num)
{
    if ($num < 2) {
        return false;
    }

    for ($check = 2; $check <= sqrt($num); $check++) {
        if ($num % $check === 0) {
            return false;
        }
    }

    return true;
}

    /**
     * Run Prime games.
     *
     * Only 3 rounds.
     *
     * @return string
     */
function runPrime()
{
    $description = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $questions = [];
    $correctAnswers = [];

    $rounds = 3;
    for ($i = 0; $i < $rounds; $i++) {
        $num = rand(0, 100);
        $questions[$i] = (string) $num;
        $correctAnswers[$i] = isPrime($num) ? 'yes' : 'no';
    }

    engine($description, $questions, $correctAnswers);
}
