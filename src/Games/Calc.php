<?php

/**
 * Calc File Doc Comment
 *
 * PHP version 7.4
 *
 * @category BrainGames
 * @package  Calculator
 * @author   toridnc <toridnc@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     https://github.com/toridnc/php-project-lvl1/tree/main
 */

namespace Src\Games\Calc;

use function Brain\Games\Engine\engine;

/**
 * A random mathematic expression is given: addition, subtraction or multiplication.
 * Need to calculate and write the correct answer.
 * Operations, like numbers, are randomly selected.
 *
 * @return string
 */
function calc(): void
{
    $description = 'What is the result of the expression?';

    $questions = [];
    $correctAnswers = [];

    $rounds = 3;
    for ($i = 0; $i < $rounds; $i++) {
        $num1 = rand(0, 10);
        $num2 = rand(0, 10);
        $operations = ['+', '-', '*'];
        shuffle($operations);
        $operation = $operations[$i];
        $question = "{$num1} {$operation} {$num2}";
        $questions[$i] = $question;

        switch ($operation) {
            case '+':
                $correctAnswers[$i] = strval($num1 + $num2);
                break;
            case '-':
                $correctAnswers[$i] = strval($num1 - $num2);
                break;
            case '*':
                $correctAnswers[$i] = strval($num1 * $num2);
                break;
            default:
                break;
        }
    }

    engine($description, $questions, $correctAnswers);
}
