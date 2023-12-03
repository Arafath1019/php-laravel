<?php

//$friends = array("Alan", 10, 12.43, true);

$friends = ["Alan", 10, 12.43, true];

print_r($friends);

echo $friends[0]." ".$friends[1];

$person = [
    "name" => "Bruce Wayne",
    "company" => "Wayne Enterprise",
    "isHero" => true,
    "age" => null,
    "favorites" => [
        "animal" => "Owl",
        "color" => "Black",
        "enemy" => "Joker"
    ]
];

echo $person["name"];
echo $person["favorites"]["animal"];