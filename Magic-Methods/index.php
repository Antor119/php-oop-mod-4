<?php
//Magic Methods in PHP Classes
class student{
    private $name;
    private $age;
    private $class;
    function __construct($name='', $age='', $class='')
    {
        $this->name=$name;
        $this->age=$age;
        $this->class=$age;
    }
    /*public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name=$name;
    }

    public function getAge(){
        return $this->age;
    }

    public function setAge($age){
        $this->age=$age;
    }

    public function getClass(){
        return $this->class;
    }

    public function setClass($class){
        $this->class=$class;
    }*/

    public function __get($props)
    
    {
        return $this->$props;
    }
    public function __set($props, $values){
        $this->$props=$values;
    }
}
$n=new student('Rahim','16', '1st' );
echo $n->age;
$n->name="Kamal";
echo $n->name;


?>