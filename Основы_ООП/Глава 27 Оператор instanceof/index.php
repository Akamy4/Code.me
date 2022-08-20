<?php
require_once('Employee.php');
require_once('Employee1.php');
require_once('Student.php');
require_once('City.php');
require_once('UsersCollection.php');

$emp1 = new Employee('Akame', 2000);
$emp2 = new Employee('Rei', 3000);
$emp3 = new Employee('Asuka', 4000);

$std1 = new Student('Sindzi', 200);
$std2 = new Student('Kaoru', 300);
$std3 = new Student('Misato', 400);

$arr = [];
$arr[] = $emp1;
$arr[] = $emp2;
$arr[] = $emp3;
$arr[] = $std1;
$arr[] = $std2;
$arr[] = $std3;

$sum_e = 0;
$sum_s = 0;

foreach ($arr as $elem) {
  if ($elem instanceof Employee) {
    $sum_e += $elem->salary;
    echo $elem->name . "<br>";
  } elseif ($elem instanceof Student) {
    $sum_s += $elem->scholarship;
    echo $elem->name . "<br>";
  }
}
echo $sum_e . '<br>';
echo $sum_s . '<br>';

$user1 = new User('Petya', 'Petyavich');
$user2 = new User('Vasya', 'Pupkin');
$user3 = new User('Petr', 'Vasilevich');

$emp1 = new Employee1('Akame', 'Aznabakiev', 3000);
$emp2 = new Employee1('Rei', 'Ayanami', 4000);
$emp3 = new Employee1('Asuka', 'Lengli', 5000);

$city1 = new City('Almaty', 343432);
$city2 = new City('Nut-Sultan', 634634);
$city3 = new City('Tashkent', 7347345);

$arr = [];
$arr[] = $user1;
$arr[] = $user2;
$arr[] = $user3;
$arr[] = $emp1;
$arr[] = $emp2;
$arr[] = $emp3;
$arr[] = $city1;
$arr[] = $city2;
$arr[] = $city3;
echo '<br><br>';

foreach ($arr as $elem) {
  if ($elem instanceof User) {
    echo $elem->name . '<br>';
  }
}
echo '<br><br>';
foreach ($arr as $elem) {
  if (!$elem instanceof Employee1 && !$elem instanceof City) {
    echo $elem->name . '<br>';
  }
}
echo '<br><br>';

$usersCollection = new UsersCollection;

$usersCollection->add(new Student2('Akame', 3000));
$usersCollection->add(new Student2('Rei', 6000));

$usersCollection->add(new Employee2('Asuka', 5000));
$usersCollection->add(new Employee2('Misato', 4000));

echo $usersCollection->getTotalScholarship() . '<br>';

echo $usersCollection->getTotalSalary() . '<br>';

echo $usersCollection->getTotalPayment() . '<br>';
