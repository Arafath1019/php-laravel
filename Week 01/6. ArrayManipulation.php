<?php

// count() -> for counting array items
$heros = ["Wolverine", "Superman", "Batman", "Batman"];
$count = count($heros);
echo $count;

// sort -> for sorting an array

sort($heros);
print_r($heros);

// array_search -> for searching an element and return the element index

echo array_search("Superman", $heros);

// array_reverse -> for reversing an array

print_r(array_reverse($heros));

// array_unique -> for getting only unique items inside an array

print_r(array_unique($heros));

$newHeros = [
    "marvel" => "Avengers",
    "dc" => "Justice League"
];

// array_values -> for getting only the values from an associative array
print_r(array_values($newHeros));

// array_keys -> for getting only the keys from an associative array
print_r(array_keys($newHeros));

// array_slice -> for slicing an array
print_r(array_slice($heros, 0));

array_shift($heros);

array_unshift($heros, "New");

array_push($heros, "New");
array_pop($heros);