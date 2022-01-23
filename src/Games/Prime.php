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
 * @return string
 */
function isPrime()
{
    $description = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    
    $questions = [];
    $correctAnswers = [];

    $rounds = 3;
    for ($i = 0; $i < $rounds; $i++) {
        $question = rand(0, 100);
        if ($question > 1 && ($question / $question === 1)) {
            $correctAnswers[$i] = 'yes';
        } else {
            $correctAnswers[$i] = 'no';
        }
        $questions[$i] = $question;
    }

    engine($description, $questions, $correctAnswers);
}
