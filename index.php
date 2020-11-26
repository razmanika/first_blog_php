<?php

class Animal{
    public $name;
    public $color;
    public $sex;

    public function __construct($name, $color, $sex){
        $this->name = $name;
        $this->color = $color;
        $this->sex = $sex;
    }


    public function getName()
    {
        return $this->name;
    }


    public function getSex()
    {
        return $this->sex;
    }


    public function getColor()
    {
        return $this->color;
    }


}


class Dog extends Animal{
    public function getName(){
        return $this->name;
    }
}

$animal = new Animal("Tiger", "Red", "Female");

echo $animal->getName();
echo $animal->getColor();
echo $animal->getSex();
//$dog = new Dog("giorgi");
//$dog->name = "suka";
//echo $dog->getName();
//echo $animal ->color;
//echo $animal->run();

