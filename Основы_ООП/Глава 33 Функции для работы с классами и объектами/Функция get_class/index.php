<?php
require_once('User.php');
require_once('Test1.php');
require_once('Test2.php');

$user = new User('Rei', 'Ayanami', 4000);

echo get_class($user);
echo '<br><br>';

$arr = [
  new Test1('Rei'),
  new Test1('Rei'),
  new Test2('Rei'),
  new Test2('Rei'),
  new Test1('Rei'),
  new Test2('Rei'),
  new Test1('Rei'),
  new Test2('Rei')
];

foreach ($arr as $elem) {
  echo get_class($elem) . "<br>";
}
