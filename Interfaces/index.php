<?php
//Discussion of Interfaces
interface BaseAnmimal{
    function isBee();
    function isCatA();
    function isDOg();
}

class Animal implements BaseAnmimal{
    function isBee(){}
    function isCatA(){}
    function isDOg(){}
}

interface  Basehuman extends BaseAnmimal{
    function callTalk();


}


//$h=new Human();
//echo $h instanceof BaseAnmimal;//polymorfisom

abstract class AbstractHuman implements  Basehuman{
    abstract public function run();
    function eat(){
        echo "I eat rice";
    }

}

class human extends AbstractHuman{
    function isBee(){}
    function isCatA(){}
    function isDOg(){}
    function callTalk(){}
    public function run(){}
    

}

$cat =new Human();


?>