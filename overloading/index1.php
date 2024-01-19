<?php
//Discussion of Method Overloading with call and callStatic Magic Methods



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

    function __call($name, $arguments)
    {
        if('run'==$name){
            if($arguments){
                echo "I am Running {$arguments[0]}";
            }
            else{
                echo "I am Running";
            }
            
            
        }
    }
    static function __callStatic($name, $arguments)
    {
        echo "static call";
    }
}
Mototcycle::wash();
$pulser=new Mototcycle('150cc', '60L', '40kph');
//echo $pulser->displacement='135cc';

if(isset($pulser->tirsize)){
    echo $pulser->tirsize;
}
  
unset($pulser->miliage);
$pulser->run('100mph');



?>