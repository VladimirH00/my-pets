<?php

namespace VladimirH00\Animals;

abstract class AbstractPet
{
    protected $name;
    protected $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    abstract public function voice();

    public function sayName()
    {
        return "Меня зовут " . $this->name;
    }

    public function sayAge()
    {
        return "Мой возраст " . $this->age;
    }
}