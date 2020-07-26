<?php

require_once 'AbstractPet.php';

use Psr\Animals\AbstractPet as Pet;

class Dog extends Pet
{

    public function sound()
    {
        return "Гав";
    }
}