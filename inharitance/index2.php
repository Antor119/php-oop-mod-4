<?php
// How to write better code with OOP by forcing
class shape{

}
class Shapes{
    private $shapes;
    public function __construct(){
        $this->shapes=array();
    }

    public function addShape(shape $shape){
       array_push( $this->shapes, $shape);
    }

    public function TotalShape(){
        return count($this->shapes);
    }
}

class Triangle extends shape{}
class Regtangular extends shape{}
class Student{}

$ShapeColletion=new Shapes();
$ShapeColletion->addShape(new Triangle());
$ShapeColletion->addShape(new Regtangular());
//$ShapeColletion->addShape(new Student());
echo $ShapeColletion->TotalShape();

?>