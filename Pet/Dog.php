<?php

require_once 'AbstractPet.php';

use VladimirH00\Animals\AbstractPet as Pet;

class Dog extends Pet
{
    const PET_VOICE = "Гав";
    public function voice()
    {
        return self::PET_VOICE;
    }
}