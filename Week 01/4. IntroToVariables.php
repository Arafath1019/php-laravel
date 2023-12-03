<?php

$name = "Yeasin";

echo $name;
echo "<br />";

function sayHi() {
    global $name;
    $age = 20;
    echo  $name. " is ".$age." years old";
}

sayHi();

echo "<br />";

$username = "arafath";

//echo "username: {$username}";
echo "Username: $username";