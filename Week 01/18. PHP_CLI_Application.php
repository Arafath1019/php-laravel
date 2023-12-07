// Shebang

#! /usr/bin/env php

<?php

// Guessing game CLI app

$options = getopt('', ['min::', 'max::']);

$min = (int) ($options['min'] ?? 1);
$max = (int) ($options['max'] ?? 100);

$number = rand($min, $max);

while (true){
    $user_input = (int) readline("Enter a number");

    if($user_input > $number){
        printf("Try a lower number.");
    } elseif ($user_input < $number){
        printf("Try a bigger number");
    } else {
        printf("Congrats! You guessed it right!");
        break;
    }
}