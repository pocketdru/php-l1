<?php 

require "./helpers.php";

$name_and_age = [
    'Al Ali' => ['Mari', 20, "Colorado"],
    'Vaider' => ['Darth', 52, "Death Star"]
];

foreach ($name_and_age as $person => $data) {

    print_full_name($data[0], $person);
    test_name($person, $data[0]);

    drinks_sake($data[1]);
    separate();
}