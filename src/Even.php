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
namespace Src\Even;

use function cli\line;
use function cli\prompt;

/**
 * Checks a number for evenness.
 * The user is shown a random number. 'Yes' if the number is even, 'no' if it is odd.
 * 
 * If the answer is incorrect, the game ends: 
 * "'$answer' is wrong answer ;(. Correct answer was '$correctAnswer'.
 * Let's try again, Bill!".
 * 
 * If the answer is correct: "Correct!" and continue playing.
 * 
 * The user must give the correct answer to three questions in a row.
 * 
 * @return string
 */
function even()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, {$name}!");
    line("Answer 'yes' if the number is even, otherwise answer 'no'.");

    for ($i = 0; $i < 3; $i++) {
        $num = rand(0, 1000);
        line("Question: {$num}");
        $answer = prompt('Your answer');
        $answer = strtolower($answer);

        if ($num % 2 === 0) {
            $correctAnswer = 'yes';
        } else {
            $correctAnswer = 'no';
        }

        if ($answer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!");
            return false;
        }
    }

    line("Congratulations, {$name}!");
    return true;
}