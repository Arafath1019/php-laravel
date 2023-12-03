<?php

function shout($message, $times=5){
    echo str_repeat($message, $times);
}

shout("Hello world", 20);