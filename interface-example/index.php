<?php
//A practical example of an interface
class districCollection implements IteratorAggregate{
    private $districts;
    function __construct(){
        $this->districts=array();
        
    }
    public function add($district){
        array_push($this->districts,$district);
    }
    
    // function getDistrict(){
    //     return $this->districts;
    // }
    function getIterator():Traversable
    {
        return new ArrayIterator($this->districts);
    }
    
}

$dis=new districCollection;
$dis->add("Khulna");
$dis->add("Bogura");
$dis->add("Dhaka");
$dis->add("Magura");
$dis->add("Nator");
//$_districts = $dis-> getDistrict();
//print_r($_districts);
foreach($dis as $istricts){
    echo $istricts ."\n";
}

//Countable Interface - Pretty cool





?>