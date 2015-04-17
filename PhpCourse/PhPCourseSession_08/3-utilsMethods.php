<?php


/*Declare the Utils class, that should include the following static methods:
 * 1. factorial(num) - should return the factorial result for a number it receives. 
 * 2. is_prime(num) - should return 'true' if the number it receives is a prime number.
 * You should code a short test for these two methods.
*/


class utils {
    var $num;
    
    function __construct($input){
        $this->num=$input;
    }
    
        
   function factorial ($num){
               
        if ($num <2){
            return 1;
        }
        else {
            return ($num*$this->factorial($num-1));
        }
    }
    
    function is_prime (){
        //check if $num is a prime number
            
            $limit = round(sqrt($this->num));
            $counter = 2;
            while ($counter <= $limit){
                if($this->num % $counter == 0){
                    return true;
                }
                $counter ++;
            }
            return false;
        }
}


$num1=10;
$ob1 = new utils($num1);
echo "<br>the factorial calculation of $num1 is <h3>". $ob1->factorial($num1) ."</h3>"; //how to use the __construct and not send the number directly (is it possible)???

if ($ob1->is_prime()){
    echo "<br>The number $num1 is <b>not prime!</b>";
}
else {
    echo "<br>The number $num1 <b>is prime!</b>";
}