<?php
class User
{
  public $name;
  public $age;

  public function setAge($age)
  {
    if ($age >= 18) {
      $this->age = $age;
    }
  }
}

$user1 = new User;

$user1->name = "John";
$user1->age = 25;
print_r($user1);
echo "<br>";
$user1->setAge(30);
print_r($user1);

echo "<br>";

$user2 = new User;
$user2->name = "Petya";
$user2->age = 20;
print_r($user2);
echo "<br>";
$user2->setAge(56);
print_r($user2);
