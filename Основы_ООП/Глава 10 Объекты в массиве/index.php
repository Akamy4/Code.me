<?php
require_once('City.php');
$citys = [
  new City('Almaty', 1.777),
  new City('Nur-Sultan', 1.002),
  new City('Атырау', 235314),
  new City('Караганда', 500826),
  new City('Шымкент', 932235)
];


foreach ($citys as $city) {
  echo $city->name . " " . $city->population . '<br>';
}
