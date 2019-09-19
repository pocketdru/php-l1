<?php 

require './User.php';

function println($string) {
    echo "$string\n";
}

$mari = new User ("mary@mary.com", "Mari", "Al Ali");

$vlada = new User ("vlada@vlada.com", "Vlada", "Mayskaya");

$kemal = new User ("kemal@kemal.com", "Kamol", "Kaya");

println($mari->full_name());
println($vlada->full_name());
println($kemal->full_name());

$mari->setImageUrl("https://vignette.wikia.nocookie.net/p__/images/c/cb/SpongeBob_SquarePants_Render.png/revision/latest?cb=20190120193322&path-prefix=protagonist");

println(User::getCreated());