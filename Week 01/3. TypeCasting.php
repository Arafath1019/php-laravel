<?php

$userAge = "25"; // User input as a string

$minimumAge = 18; // Minimum age requirement as an integer

if((int) $userAge >= $minimumAge){
    echo "Vote accepted";
} else {
    echo "Sorry, you're too young to vote.";
}

echo "<br />";

// Converting values to Booleans

$str = "Yeasin";

var_dump((bool) $str);

echo "<br />";

var_dump(boolval($str));

echo "<br />";

$cart = "200 tesla cars";
var_dump((int) $cart);

echo "<br />";

var_dump(intval($cart));

echo "<br />";

class Twitter {
    public $username;
    protected $tweet;
    private $joiningDate;
}

var_dump((array) new Twitter());

echo "<br />";

$arr = (object) ["fruit" => "apple", "vegetable" => "potato"];

var_dump($arr->fruit);