<?php
require_once('Cube.php');
require_once('User.php');

$cube = new Cube(6);
$user = new User("Rei", 14);

echo "объема куба = " . $cube->volume() . " площадь поверхности = " . $cube->surface_area();
echo "<br>";
echo "Имя юзера = " . $user->getName() . " возраст = " . $user->getAge();
