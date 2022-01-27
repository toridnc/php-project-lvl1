<?php

/**
 * Progression File Doc Comment
 *
 * PHP version 7.4
 *
 * @category BrainGames
 * @package  Progression
 * @author   toridnc <toridnc@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     https://github.com/toridnc/php-project-lvl1/tree/main
 */

namespace Src\Games\Progression;

use function Brain\Games\Engine\engine;

/**
 * Shows a series of numbers - arithmetic progression.
 * Need to write the missing number.
 *
 * Only 3 rounds.
 */
function progression()
{
    $description = 'What number is missing in the progression?';

    $questions = [];
    $correctAnswers = [];

    $rounds = 3;
    for ($i = 0; $i < $rounds; $i++) {
        $progressionLength = 10;
        $firstNum = rand(1, 25);
        $difference = rand(2, 15);
        $lastNumIndex = $progressionLength - 1;
        $hidenNumIndex = rand(0, $lastNumIndex);
        $lastNum = $firstNum + $difference * $lastNumIndex;
        $progression = range($firstNum, $lastNum, $difference);

        $correctAnswer = (string) $progression[$hidenNumIndex];
        $progression[$hidenNumIndex] = '..';
        $question = implode(' ', $progression);

        $questions[$i] = $question;
        $correctAnswers[$i] = $correctAnswer;
    }

    engine($description, $questions, $correctAnswers);
}
