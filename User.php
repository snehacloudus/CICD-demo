<?php

class User
{
    private $name;
    private $age

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        retur n $this->age
    }

    public function isAdult()
    {
        return $this->age >= 18;
    }
}
