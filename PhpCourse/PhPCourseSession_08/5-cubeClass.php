<?php
//Declare a class that describes a cube

class cube {
    var $length;
    
    function __construct($num){
        
        $this->length=$num;
        echo "<br> set the lenght of the cube to $num";
    }
    
    function setLength ($num){
        $this->length=$num;
    }
    
    function getLenght (){
        return $this->length;
    }
    
    function getVolume (){
        return pow($this->length,3);
    }
}

$len=2;
$ob1=new cube($len);
echo "<br>The volume of cube with lenght equal to ". $ob1->getLenght()." is: ".$ob1->getVolume();