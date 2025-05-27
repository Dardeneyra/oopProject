<?php

use App\Person;
use App\Student;

require_once '../vendor/autoload.php';

$student1 = new Student('Danil', 22);
$student2 = new Student('Misha', 33);

$person1 = new Person('Egor',25);
$person2 = new Person('Ivan',36);
echo 'количество людей:' . person::getCounter();
echo "\n";
echo 'количество студентов:' . student::getCounter();