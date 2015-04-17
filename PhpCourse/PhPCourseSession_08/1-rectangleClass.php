<?php
/* Declare the Rectangle class. 
 * This class should include the width & height properties. 
 * In addition, this class should include a constructor that allows instantiating it sending two arguments 
 * (the width and the height). 
 * Your script should include a simple test for this class.
 */

class rectangle {
 
 var $width;
 var $hight;

    function __construct($numA,$numB) 
    {
     $this->width=$numA;
     $this->hight=$numB;
    }
    
    function area()
    {
        return  $this->width*$this->hight;
    }
 
}

$num1=5;
$num2=10;
$ob= new rectangle($num1, $num2);
echo "the area of rectangle with width = $num1 and hight = $num2 is:: ".$ob ->area();

?>