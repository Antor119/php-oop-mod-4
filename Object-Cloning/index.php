<?php
//Object Cloning in PHP

class color{
    public $color;
    function __construct($color)
    {
      $this->color=$color;  
    }

    function setColor($color){
        $this->color=$color;
    }


    
}
class Fabcolor{
    public $data;
    public $color;
    function __construct($data, $color){
        $this->data=$data;
        $this->color=new color($color);
        
    }

    function updateColor($color){
        $this->color->setColor($color);
        
    }
    function __clone()
    {
        $this->color=clone $this->color;
    }
    
}



$fc1=new Fabcolor("Some Color","red");


print_r($fc1);
$fc2=clone $fc1;
print_r($fc2);
$fc2->updateColor('Green');
print_r($fc1);
print_r($fc2);









?>