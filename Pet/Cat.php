<?php

require_once 'AbstractPet.php';

use VladimirH00\Animals\AbstractPet as Pet;

class Cat extends Pet
{
    const PET_VOICE = "Мяу";
    public function voice()
    {
        return self::PET_VOICE;
    }
}