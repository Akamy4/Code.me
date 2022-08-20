<?php
require_once('Employee.php');
require_once('Post.php');

$post1 = new Post('программист', 3000);
$post2 = new Post('менеджер', 5000);
$post3 = new Post('водитель', 2000);

$emp1 = new Employee('Akame', 'Aznabakiev', $post1);
$emp2 = new Employee('Rei', 'Ayanami', $post2);
$emp3 = new Employee('Asuka', 'lenly', $post3);

echo ($emp1->getName() . ' ' . $emp1->getSurname() . ' ' . $emp1->getPost()) . '<br>';
echo ($emp2->getName() . ' ' . $emp2->getSurname() . ' ' . $emp2->getPost()) . '<br>';
echo ($emp3->getName() . ' ' . $emp3->getSurname() . ' ' . $emp3->getPost()) . '<br>';

$emp1->changePost($post2);
echo ($emp1->getName() . ' ' . $emp1->getSurname() . ' ' . $emp1->getPost()) . '<br>';
