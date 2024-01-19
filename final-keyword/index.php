<?php
// Use of final keyword in inheritance
abstract class myClass{
   final function doSomething(){
        echo "DO Something";
    }
}
class newClass extends myClass{

}

$m=new newClass();
$m->doSomething();


?>