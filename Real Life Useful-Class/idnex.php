<?php
//Writing a Real Life Useful Class #ff0000
class RGB{
    private $color;
    private $red;
    private $green;
    private $blue;
    public function __construct($coloCode){
        $this->color=ltrim($coloCode,"#");
        $this->parseColor();
    }
    public function getColor(){
        return $this->color;
    }
    public function getRgbColor(){
        return array($this->red, $this->green, $this->blue);
    }
    public function readcolor(){
        echo "Red : {$this->red}\nGreen : {$this->green}\nBlue : {$this->blue}";
    }
    public function setColor($coloCode){
        $this->color=ltrim($coloCode,"#");
        $this->parseColor();
    }

    private function parseColor(){
        if($this->color){
        list($this->red, $this->green, $this->blue)=sscanf($this->color,'%02x%02x%02x');
       /*echo  $this->red."\n";
       echo  $this->green."\n";
       echo  $this->blue."\n";*/
    }
    else{
        list($this->red, $this->green, $this->blue)=array(0,0,0);
    }
    }

    public function getRed(){
        return $this->red;
    }
    public function getGreen(){
        return $this->green;
    }
    public function getBlue(){
        return $this->blue;
    }

}
$mycolor=new RGB("f3f3f3");
$mycolor->readcolor();
$mycolor->getColor();

?>