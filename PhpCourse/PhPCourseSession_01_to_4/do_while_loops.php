<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//
//(1)
//  prints out to the screen (via a while loop) all numbers between 1 and 100 (in their order).
//
echo "<h2> Print all the numbers from 1 to 100</h2>";

echo "<br> echo numbers with while loop:";
echo "<br>======================================";
echo "<br>";

$i=0; //The index

while ($i<=99)
    {
    echo ++$i.",";
    
}

echo "<br>";
echo "<br> echo numbers with do-while loop";
echo "<br>======================================";
echo "<br>";

$i=0;

do {
    echo ++$i.",";
    }
while ($i<100);

echo "<br>";
echo "<br><h3> print the multiplication tablenumbers with while loop</h3>";
echo "<br>==================================================================";
echo "<br>";

$a=1;
$b=0;
echo "||";
while($a<11){
    
    while ($b<10)
        {
        echo $a*++$b."||";
    }
    $b=0;
    echo "<br>||";
    ++$a;
    }
    
       

?>