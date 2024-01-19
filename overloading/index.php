<?php
//Discussion of property overloading and the isset () and unset () magic methods

class Mototcycle{
    private $parameters;
    public function __construct($displacement, $capacity, $miliage)
    {
        $this->parameters=[];
        $this->parameters['displacement']=$displacement;
        $this->parameters['capacity']=$capacity;
        $this->parameters['miliage']=$miliage;
    }

    // public function getDisplacement(){
    //     return $this->parameters['displacement'];
    // }
    // public function setDisplacement($displacement){
    //     $this->parameters['displacement']=$displacement;
    // }

    function __isset($name)
    {
        if(!isset($this->parameters[$name])){
            echo "{$name} is not found";
            return false;
        }
        return true;
    }

    function __get($name){
      echo  $this->parameters['name']=$name;
    }

    function __set($name, $vlaue){
      echo  $this->parameters[$name]=$vlaue;
        
    }

    function __unset($name)
    
    {
        print_r($this->parameters);
        unset($this->parameters[$name]);
        print_r($this->parameters);
    }
}

$pulser=new Mototcycle('150cc', '60L', '40kph');
//echo $pulser->displacement='135cc';

if(isset($pulser->tirsize)){
    echo $pulser->tirsize;
}
  
unset($pulser->miliage);



?>