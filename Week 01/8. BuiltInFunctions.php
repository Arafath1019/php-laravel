<?php

// strlen() -> for getting the length of a string

$message = "Never gonna give you up! Never Gonna Let You Down";

echo strlen($message);

// ucfirst() -> Uppercase first letter

echo ucfirst($message);

// lcfirst -> Lovercase first letter

echo lcfirst($message);

// strtolower() -> for converting all letter to lower case
echo strtolower($message);

// strtoupper() -> for converting all letter to upper case
echo strtoupper($message);

// ucwords() -> uppercase words

echo ucwords($message);

// str_word_count() -> for counting the number of words in a string

echo str_word_count($message);

$tags = "Javascript,PHP,Programming,Learning";

print_r(explode(",", $tags));

$tagArray = ["php", "javascript", "programming", "tech"];
//echo implode(",", $tagArray);
echo join(",", $tagArray);

echo number_format(5300000, 2, "%asdasd", "-");

// Date & Time functions

// date()

echo date("d-m-Y");

// time()

echo time();

// file_get_contents() -> real file content

echo file_get_contents("users.txt");

// unlink() -> for deleting file from the directory

//unlink("users.txt");

// file_exists() -> for checking if the file exists

echo file_exists("users.txt");