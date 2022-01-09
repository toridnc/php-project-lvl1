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
 * A random mthematic expression is given: addition, subtraction or multiplication.
 * Need to calculate and write the correct answer.
 * Operations, like numbers, are randomly selected.
 * 
 * @return string
 */
function calc()
{
    $description = 'What is the result of the expression?';

    $questions = [];
    $correctAnswers = [];



    $questions[$i] = $question;
    $correctAnswers[$i] = $correctAnswer;

    engine($description, $questions, $correctAnswers);
}