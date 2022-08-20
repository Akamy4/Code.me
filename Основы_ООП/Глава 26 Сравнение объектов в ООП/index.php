<?php
require_once('Compare.php');
require_once('User.php');
require_once('EmployeesCollection.php');

$user1 = new User('Akame', 20);
$user2 = new User('Akame', '20');
$user3 = new User('Akame', 22);
$user4 = new User('Akame', 20);
$user5 = $user1;

$compare = new Compare;

echo $compare->compare1($user1, $user2) . '<br>';
echo $compare->compare1($user1, $user3) . '<br>';
echo $compare->compare1($user1, $user4) . '<br>';
echo $compare->compare1($user1, $user5) . '<br>';
echo '<br><br>';

echo $compare->compare2($user1, $user2) . '<br>';
echo $compare->compare2($user1, $user3) . '<br>';
echo $compare->compare2($user1, $user4) . '<br>';
echo $compare->compare2($user1, $user5) . '<br>';
echo '<br><br>';

echo $compare->compare3($user1, $user2) . '<br>';
echo $compare->compare3($user1, $user3) . '<br>';
echo $compare->compare3($user1, $user4) . '<br>';
echo $compare->compare3($user1, $user5) . '<br>';
echo '<br><br>';

$employeesCollection = new EmployeesCollection;

$emp1 = new Employee('Akame', 3000);
$emp2 = new Employee('Akame', 3000);
// $emp2 = $emp1;
$emp3 = new Employee('Akame', 4000);

echo $employeesCollection->add($emp1);
echo $employeesCollection->add($emp2);
echo $employeesCollection->add($emp3);

echo '<pre>';
print_r($employeesCollection->get());
