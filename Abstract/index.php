<?php
//Abstract Classes and Abstract Methods in OOP
abstract class shape{
   abstract public function getArea();
   abstract public function getPerimeter();
}
class Ractangular extends shape{
    private $base, $height;
    public function __construct($base, $height){
        $this->base=$base;
        $this->height=$height;

    }
    public function getBase(){
        $this->base=$base;
    }
    public function getHeight(){
        $this->height=$height;
    }
    public function getArea(){
        return $this->base * $this->height;
    }
    public function getPerimeter(){

    }

}

class Trangle extends shape{
    public function getArea(){
        return $this->base * $this->height;
    }
    public function getPerimeter(){

    }
}
$r=new Ractangular(4,5);
echo $r->getArea();

?>