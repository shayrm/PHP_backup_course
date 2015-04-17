<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "<div id=\"heading\" style=\"width:500px;height:100px;;background-color:blue;text-align:center;\"><br>";
echo "<h2 style=\"color:black\">Assignment of PHP course #8 Session number-5  30/07/14</h2>";
echo "<hr>";
echo "<p></p></div>";

//Develop a PHP script that replaces all numbers in the following text with their names 
//(e.g. instead of '1' we should get 'one', instead of '2' we should get 'two' etc.): 
//"I love buying 4 falafels instead of 2. Most people prefer buying 3 falafels. I am not sure if this is the 1 I want."

$ary_msg1= array ("I love buying 4 falafels instead of 2.",
                  "Most people prefer buying 3 falafels.",
                  "I am not sure if this is the 1 I want.");

$search  = array(0,1,2,3,4,5,6,7,8,9);
$replace = array('zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine');

foreach ($ary_msg1 as $key=>$value) {
echo "<br>Original sentence was:<br>".$value;
echo "<br> After the change we get:";
echo "<br><b>". str_replace($search, $replace, $value)."</b>";
echo "<br>----------------------------------------------";
}
echo "<br>===========END===============================";
echo "<p></p>";
//Develop a PHP script that bubble sort the following strings: 
//"Dog", "Cat", "Tiger", "Fish", "Monkey" and "Zebra".

$ary_main=array ("Dog","Cat","Tiger","Fish","Monkey","Zebra");

foreach ($ary_main as $key=>$value){
    
$ary_word=  str_split($value);

$after_sort=bubble_sort($ary_word);

echo "<br>the original word is :<b> $value </b>";
echo "<br>the sorted word after bubble sort is : <b>$after_sort</b>";
echo "<br>-----------------------------------------------------";
}

function bubble_sort ($string){
    $l=count($string);
    do {
        $new_n=0;
    
    for ($i=1;$i<$l;$i++){
        if (strtolower($string[$i-1])>strtolower($string[$i])){
            //if A[i-1] > A[i] then swap the strings
        $temp=$string[$i-1];
        $string[$i-1]=$string[$i];
        $string[$i]=$temp;
        $new_n=$i;
        }
    }
    $n=$new_n;
    
    }
    while ($n==0);
  return implode($string);
}


// The following PHP script should print the floating point number with a precision of 4 digits. 
// You should complete the missing code.

echo "<br>========================================<br>";
$value = 125525.12387452;
echo "<br>Print the floating point number with a precision of 4 digits of the number $value";
echo "<br>";
printf("%.4f",$value);
?>
