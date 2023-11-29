<?php

// Integer: 10, 2, -30, 0

echo 10 + 10;
echo "<br />";
echo gettype(10);
echo "<br />";
echo var_dump(10);
echo "<br />";

// Float: 2.50, -10.40, -0.50

echo 2.50 + 3.50;
echo "<br />";
echo var_dump(2.50 + 3.50);
echo "<br />";

// String: "Hello world", 'Hello world'

echo "Hello world";
echo "<br />";
echo "10+10";
echo "<br />";

// Boolean: true, false

echo gettype(false);
echo "<br />";

// Array: array(10, "Hello", false), [10, "Hello", false]

var_dump([10, "Hello", false]);
echo "<br />";
print_r([10, "Hello", true]);
echo "<br />";

// Null
echo null;
echo "<br />";
echo gettype(null);
echo "<br />";

// Object

class Animal{

}

echo var_dump(new Animal());

