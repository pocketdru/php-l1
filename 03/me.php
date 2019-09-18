<?php 
$argv[1];
echo $argv[1]. "\n";

$name_and_age = [
    'Al Ali' => ['Mari', 20],
    'Vaider' => ['Darth', 52]
];

foreach($name_and_age as $person => $data) {
    $full_name = $person . ' ' . $data[0];
    echo "My name is $full_name.\n";

    if (strlen($full_name) < 12) {
        echo "This is a short name!\n";
    } else {
        echo "This is a long name!\n";
    }


$age = $data[1];

echo "I'm $age years old.\n";
if ($age > 21) {
    echo "Sake!!\n";
} else {
    echo "No sake for you!\n";

    echo str_repeat ("==", 8) . "\n";
}
}