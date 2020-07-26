<?php

require_once 'Pet/Cat.php';
require_once 'Pet/Dog.php';

$cat = new Cat("Tom", 20);
echo $cat->voice() . "<br>";
echo $cat->sayAge() . "<br>";
echo $cat->sayName() . "<br>";
$dog = new Dog("Rex", 12);
echo $dog->voice() . "<br>";
echo $dog->sayAge() . "<br>";
echo $dog->sayName();