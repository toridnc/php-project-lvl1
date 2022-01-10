<?php
/**
 * Engine File Doc Comment
 *
 * PHP version 7.4
 *
 * @category BrainGames
 * @package  Logic
 * @author   toridnc <toridnc@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     https://github.com/toridnc/php-project-lvl1/tree/main
 */
namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

/**
 * Greets and asks for a name.
 * Shows a description of the game.
 * Asks a question from the game.
 * 
 * If the answer is incorrect, the game ends: 
 * "{answer} is wrong answer ;(. Correct answer was {correctAnswer}.
 * Let's try again, {name}!".
 * 
 * If the answer is correct: "Correct!" and continue playing.
 * 
 * Only 3 rounds.
 * 
 * @param string $description    Description of the game
 * @param array  $questions      Random question of the game
 * @param string $correctAnswers Correct answer
 * 
 * @return string 
 */
function engine(string $description, array $questions, array $correctAnswers)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, {$name}!");
    line($description);
    
    $rounds = 3;
    for ($i = 0; $i < $rounds; $i++) {
        line("Question: {$questions[$i]}");
        $answer = prompt('Your answer');
        $answer = strtolower($answer);

        if ($answer === $correctAnswers[$i]) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(.");
            line("Correct answer was '{$correctAnswers[$i]}'.");
            line("Let's try again, {$name}!");
            return false;
        }
    }

    line("Congratulations, {$name}!");
    return true;
}
