<?php

// echoes to the screen but includes a new line 
function println($string) {
    echo "$string\n";
}

function separate($separator = '=', $repetitions = 12) {
    println(str_repeat($separator, $repetitions));
}

function print_full_name($first_name, $last_name) {
    $full_name = $first_name . " " . $last_name;
    // echo "Hi, my name is $first_name" . " " . "$last_name \n";
    println("My name is $full_name.");
    println(test_name($full_name));
}

function test_name($name) {
    if (strlen($name) < 12) {
        return "This is a short name!";
    } else {
        return "This is a long name!";
    }
}

function test_sake($age) {
    if ($age > 21) {
        return "Sake!!";
    } else {
        return "No sake for you!";
    }
}

function drinks_sake($age) {
    println("I'm $age years old.");
    println(test_sake($age));
}