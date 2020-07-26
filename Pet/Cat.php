<?php

require_once 'AbstractPet.php';

use Psr\Animals\AbstractPet as Pet;

class Cat extends Pet
{

    public function sound()
    {
        return "Мяу";
    }
}