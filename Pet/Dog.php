<?php

require_once 'AbstractPet.php';

use VladimirH00\Animals\AbstractPet as Pet;

class Dog extends Pet
{

    public function voice()
    {
        return "Гав";
    }
}