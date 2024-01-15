<?php
//Classes, Objects, Methods and Properties
class Human{
    public $name;
    function sayHi(){
        echo "Yes\n";
        $this->sayname();
    }
    function sayName(){
        echo "My name is {$this->name}";
    }
}

class Cat{
    function sayHi(){
        echo "Mew";
    }
}
class Dog{
    function sayHi(){
        echo "Woof";
    }
}

$h1=new Human();
$h1->name="Mahadi";//set
$cat=new Cat();
$dog=new Dog();

$h1->sayHi();
echo "\n";
$cat->sayHi();
echo "\n";
$dog->sayHi();
echo "\n";
// echo $h1->name;
//get
//$h1->sayName();