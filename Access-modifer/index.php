<?php
//Public and Private Methods and Properties of Classes

class Fund{
    public $fund;
    public function __construct($initialFund=0){
        $this->fund=$initialFund;
    }
    public function addFund($mony){
        $this->fund +=$mony;
    }
    public function sumFund($mony){
        $this->fund -=$mony;
    }

    public function totalMony(){
        echo "Total fund is {$this->fund}\n";
    }
}
$ourFund=new fund(100);
$ourFund->totalMony();
$ourFund->addFund(10);
$ourFund->totalMony();
$ourFund->sumFund(20);
$ourFund->totalMony();
?>