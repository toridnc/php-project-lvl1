<?php

namespace Brain\Games\Cli;

function welcome()
{
  line('Welcome to the Brain Game!');
  $name = prompt('May I have your name?');
  line("Hello, %s!", $name);
}