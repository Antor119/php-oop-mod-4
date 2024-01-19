<?php
//Static methods and properties of classes
class MathCalculator{
    private $number;
    static $num;
   static public function fibonacci($n){
    self::doSomething();
    echo "Fibonacci Serice of {$n}\n";

    }
    static public function doSomething(){
        echo "Do something\n";
    }
    public function factorial($n){
        $this->doSomething();
        static::doSomething();
        $this->number;
        echo "Calculating Factorial of: {$n}\n";

    }
}

$mathC=new MathCalculator();
$mathC->factorial(7);
MathCalculator::fibonacci(8);


?>