<?php

/* 
 * Declare the Rectangle class. 
 * This class should include the width & height properties. 
 * In addition, this class should include a constructor that allows instantiating it sending two arguments 
 * (the width and the height). 
 * Your script should include a simple test for this class.
 */
class Rectangel {
    var $width;
    var $hight;
    
    function __construct($numA,$numB) {
        $this->width=$numA;
        $this->hight=$numB;
    }
    function area (){
        return $this->width*$this->hight;
    }
}
$ob = new Rectangel(9,10);
echo "The area of the given rectangel is ".$ob ->area();
