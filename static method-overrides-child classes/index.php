<?php
//Discussing static method overrides in child classes
//Discussion of static scope
class appsTic{
    protected static $names;
    static function name(){
        self::$names="Hello";
        echo "Hi I am Antor\n";
    }
}

class web extends appsTic{
   static function name(){
    parent::name();
    echo parent::$names."\n";
        echo "React\n";
        
    }
}

// $n=new web();
// $n->name();
web::name();

?>