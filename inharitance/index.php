<?php
//Discussing the scope of parent and child classes

class parentClass{
    protected $name;
    public function __construct($name){
        $this->name=$name;
        $this->sayHi();
        
    }
    public function sayHi(){
        echo "Hi from {$this->name}\n";
    }


}
class childClass extends parentClass{
    
    public function sayHi(){
        parent::sayHi();
        echo "Hello\n";
    }

}
$cc=new childClass("Khulna");

?>