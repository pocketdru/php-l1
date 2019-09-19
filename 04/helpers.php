<?php

function println($string) {
    echo "$string\n";
}

function separate($separator = '=', $repetitions = 12) {
    println(str_repeat($separator, $repetitions));
}
function test_name($name) {
    if (strlen($name) < 12) {
        echo "This is a short name!\n";
    } else {
        echo "This is a long name!\n";
    }
}

function test_sake($age) {
    if ($age > 21) {
        echo "Sake!!\n";
    } else {
        echo "No sake for you!\n";
    }
}