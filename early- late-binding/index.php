<?php
//Detailed discussion on early and late binding
class Plane{
    static function echoName(){
        echo static::getName();
    }
    static function getName(){
        return "Plane";
    }
}

class Earth extends Plane{
    static function getName()
   
    {
        return "Earth";
    }
}

Earth::echoName();


?>