<?php
/*Declare the Shape interface. 
 * Its abstract method should be "area()". 
 * Declare the Rectangle and Circle classes as classes that implement Shape. 
 * Write a short code to test your code.
 */

interface shape {
    function area ();
}

class rectangle implements shape {
    var $width;
    var $hight;
    
    function __construct($wval,$hval){
    $this->width=$wval;
    $this->hight=$hval;
    
    }
    
    function area (){
        return $this->hight*$this->width;
    }
    
}

class circle implements shape {
    var $radius;
    
    function __construct($redVal){
    $this->radius=$redVal;
    }
    function area(){
        return 3.14*pow($this->radius,2);
    }
}
