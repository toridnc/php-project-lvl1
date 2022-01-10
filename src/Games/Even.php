<?php
/**
 * Even File Doc Comment
 *
 * PHP version 7.4
 *
 * @category BrainGames
 * @package  Even
 * @author   toridnc <toridnc@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     https://github.com/toridnc/php-project-lvl1/tree/main
 */
namespace Src\Games\Even;

use function Brain\Games\Engine\engine;

/**
 * Checks a number for evenness.
 * The user is shown a random number.
 * 'Yes' if the number is even, 'no' if it is odd.
 * 
 * Only 3 rounds.
 * 
 * @return string
 */
function even()
{
    $description = "Answer 'yes' if the number is even, otherwise answer 'no'.";
    
    $questions = [];
    $correctAnswers = [];
    
    $rounds = 3;
    for ($i = 0; $i < $rounds; $i++) {
        $question = rand(0, 100);
        if ($question % 2 === 0) {
            $correctAnswers[$i] = 'yes';
        } else {
            $correctAnswers[$i] = 'no';
        }
        $questions[$i] = $question;
    }

    engine($description, $questions, $correctAnswers);
}
