<?php

/*The following PHP code declares the Circle class. 
 * This class should include the radius property. 
 * In addition, this class should include a constructor that allows instantiating it sending one argument (the radius).
*/

class circle {
    
    private $radius;
    
    function __construct($red){
        $this->radius=$red;
    }
    
    function area (){
        $result1 = (3.14*pow($this->radius,2));
        return $result1;
    }
    
    function perimeter(){
        $res2=2*3.14*$this->radius;
        return $res2;
    }
}

$ob1= new circle(4);
$ob2= new circle(10);

$are=$ob1->area();
$per=$ob1->perimeter();
echo "<br>Area of OB1 circle is: $are";
echo "<br>Perimeter of OB1 circle is $per";
echo "<hr>";
$are2=$ob2->area();
$per2=$ob2->perimeter();
echo "<br>Area of OB1 circle is: $are2";
echo "<br>Perimeter of OB1 circle is $per2";

?>