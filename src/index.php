<?php

require_once __DIR__ . "/class/User.php";
require_once __DIR__ . "/class/Student.php";
require_once __DIR__ . "/class/Teacher.php";

$student1 = new Student("Mc", "Doe");
echo $student1->getEmail();
echo "<br>";

$teacher1 = new Teacher("Thomas", "Mouchelet");
echo $teacher1->getEmail();
echo "<br>";

$user1 = new User("jean", "paul");
$user2 = new User("thomas", "mouchelet");

echo $user1->getEmail() . "<br>";
echo $user2->getEmail() . "<br>";

$user2->setEmail("<EMAIL>");
echo $user2->getEmail() . "<br>";

echo $user1->sayHello($user2) . "<br>";

var_dump($user1);