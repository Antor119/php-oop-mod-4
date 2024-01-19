<?php
//Conversion from object to string
class color{
    public $color;
    function __construct($color)
    {
      $this->color=$color;  
    }

    function setColor($color){
        $this->color=$color;
    }

    function __toString()
    {
        return "This color is {$this->color}";
    }


    
}

$c=new color("Red");
echo $c;


?>