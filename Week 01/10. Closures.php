<?php

$years = [2002, 2003, 2004, 2005];

$incrementYear = function ($year) {
    return $year += 10;
};

$updatedYears = array_map($incrementYear, $years);

print_r($updatedYears);

$chat = function ($message){
    echo $message;
};

$chat("Hello world");
echo "<br />";

function greet($name, $customerGreeting) {
    echo "Hello, $name! ";
    echo "<br />";
    $customerGreeting();
}

greet("Yeasin Arafath", function () {
    $time = date('h:i');

    echo "Have a great day! It's $time";
});

$username = "Yeasin Arafath";

$greetings = [
    "Hello",
    "Merhaba"
];

$formattedGreetings = array_map(function ($greeting) use ($username) {
    return "$greeting, $username";
}, $greetings);

function display($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

display($formattedGreetings);

// using arrow function

$newFormattedGreetings = array_map(fn ($greeting) => "$greeting, $username", $greetings);
display($newFormattedGreetings);