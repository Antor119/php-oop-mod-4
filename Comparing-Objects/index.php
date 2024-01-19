<?php
//Comparing Objects
class Planet{
    public $name;
    public function __construct($name)
    {
        $this->name=$name;
    }
}
$n=new Planet("Earth");
$e=new Planet("Earth");
$m=new Planet("Mars");
if($n==$e){
    echo "This similar Planet";
}
else{
    echo "Not similar Planet";
}

?>