<?php
//Class file autoloading
//include "ship.php";
function spl_autoload_register($name){
    if(!class_exists($name)){
        include "{$name}.php";
    }
}

(new Ship)->shipMange();


?>