<?php
// Creating constants in classes
define("ok",45);
echo ok."\n";

class myClass{
    const City="khulna\n";
    function sayHi(){
        echo "Hi From ".self::City;
    }
}
$m=new myClass();
$m->sayHi();
echo $m::City;

?>