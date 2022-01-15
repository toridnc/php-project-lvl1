<?php
/**
 * Cli File Doc Comment
 *
 * PHP version 7.4
 *
 * @category BrainGames
 * @package  Welcome
 * @author   toridnc <toridnc@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     https://github.com/toridnc/php-project-lvl1/tree/main
 */
namespace Brain\Games\Cli;

use function cli\line;
use function cli\prompt;

/**
 * Greets and asks for a name.
 * 
 * @return string 'Hello, {$name}!'
 */
function welcome()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, {$name}!");
}
