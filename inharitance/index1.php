<?php
//More examples on inheritance
class shape{
    protected $name;
    protected $area;
    public function __construct($name){
        $this->name=$name;
        $this->calculateArea();

    }

    public function getArea(){
        echo "this {$this->name}'s area is {$this->area}";
    }

    public function calculateArea(){

    }
}
class Triangel extends shape{
    private $a, $b, $c;
    public function __construct( $a, $b, $c){
        $this->a=$a;
        $this->b=$b;
        $this->c=$c;
        parent::__construct('Triangel');
       

}
public function calculateArea(){
    
    $parimative = ($this->a+$this->b+$this->c)/2;
    $this->area=sqrt($parimative*($parimative-$this->a)*($parimative-$this->a)*($parimative-$this->a));

}
}

class Ractangle extends shape{
    private $a, $b;
    public function __construct( $a, $b){
        $this->a=$a;
        $this->b=$b;
       
        parent::__construct(' Ractangle');
       

}
public function calculateArea(){
    
    $this->area= $this->a * $this->b;
}

}
$r=new  Ractangle(2,4);
$r->getArea();
echo "\n";
$t=new  Triangel(7,9,6);
$t->getArea();

?>