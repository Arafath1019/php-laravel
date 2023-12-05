<?php

// for()

$rating = 3;

for($i = 1; $i <= 5; $i++){
    echo ($i <= $rating) ? "*" : "-";
}

$officeEmployees = [
    "Sales" => ["Jim", "Pam", "Dwight"],
    "Accounting" => ["Angela", "Kevin", "Oscar"],
    "HR" => ["Toby", "Holly"],
    "Warehouse" => ["Darryl", "Roy"]
];

for($i = 0; $i < count($officeEmployees); $i++){
    $keys = array_keys($officeEmployees);
    echo "Department: ". $keys[$i]. "<br />";
    for($j = 0; $j < count($officeEmployees[$keys[$i]]); $j++){
        echo "- ". $officeEmployees[$keys[$i]][$j]. "<br />";
    }
}

// foreach()

$names = ["Laravel", "Symfony", "Lumen"];

foreach ($names as $key => $name){
    echo "$key - $name <br />";
}



// while()

$validPassword = "secretpassword";

$userInput = "";

while ($userInput !== $validPassword){
    $userInput = readline("Enter the password: ");
}

echo "Access Granted";

// do...while()

do{
    $email = readline("Enter your email address: ");
    echo "Confirmation email sent to $email\n";
    $confirmation = readline("Did you receive the email? (Yes/No): ");
} while($confirmation !== "yes");