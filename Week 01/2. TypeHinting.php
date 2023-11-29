<?php
declare(strict_types=1);

//(int) $students = 100;
(int) $age = "19";

echo var_dump($age + 10); // This is type juggling
echo "<br />";

function calcAge(int $birthYear, string $name) // This is type hinting
{
    echo "Hey, $name, you are ". 2023 - $birthYear." years old!";
}

calcAge(1990, "Alan");