<?php

require_once 'AbstractPet.php';

use VladimirH00\Animals\AbstractPet as Pet;

class Cat extends Pet
{

    public function voice()
    {
        return "Мяу";
    }
}