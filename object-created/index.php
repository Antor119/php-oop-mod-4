<?php
//A class's constructor method that runs automatically when an object is created from the class
class fruits{
    public $name;
    public $price;
    function sayName(){
        if($this->price){
            echo "It is a {$this->name} and price{$this->price}";

        }
        else{
            echo "It is a {$this->name} i dont fixed price";
        }
        
    }
    function __construct($personName, $fruitsPrice=0){//optional
        echo "M H Antor\n";
        $this->name=$personName;
        $this->price=$fruitsPrice;

    }

    function sayHi(){
        echo "HI\n";
    }

}

$h1=new fruits("Orange", ' $23');
$h2=new fruits("Mango");
// $h1->name="Mango";
$h1->sayHi();
$h1->sayName();
echo "\n";
$h2->sayName();

?>