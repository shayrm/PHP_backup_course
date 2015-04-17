<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Assignment of PHP course #8 Session number-3 16/07/14
//
echo "<h2 style=\"color:green\">Assignment of PHP course #8 Session number-3 16/07/14</h2>";
echo "<hr>";
// Sum of Numbers Loop (Difficulty Level 3/5)
//==================================
//
echo "<h3 style=\"color:blue\"> Claulate the sum of a given array</h3>";
$Ari_2= array (1,2,3,14,5,26);
$count= count ($Ari_2);

for ($i=0; $i<$count; $i++){
    if ($i==0){
       $sum=0;
    }
    $sum+=$Ari_2[$i];
}
var_dump($Ari_2);    
echo "<br>the sume of all numbers in the given array is $sum";
echo "<br>===========================<br>";


//Sum of Numbers Loop

//
// Multiplication Loop
//==================================
//
$Ari_1= array (1,2,3,4,5,6,7,8,9,10);
$count= count ($Ari_1);

for ($i=0; $i<$count; $i++){
    for ($r=1; $r<$count; $r++){
    echo "the multiplication of $Ari_1[$i] with $Ari_1[$r] is: " .$Ari_1[$i]*$Ari_1[$r]."<br>";
    }
    echo "<br>===========================<br>";
}


//Function Name Within Variable 
//==================================

echo "<br>The AAA and BBB Loops";
echo "<br>==================================<br>";
function printAAA()
    {
    echo 'AAA';
    }
function printBBB()
    {
    echo 'BBB'; 
    }

    $a='printAAA';
    $b='printBBB';

    for($r=0; $r<8; $r++)
    {
        for($c=0; $c<8; $c++)
        { 
            if(($r/2+$c/2)%2==0)
            {
            $a();
            }
            else
            {
            $b();  
            }
        }
    echo"<br>";
    }

// MMMOOO Loops
//==================================
//

    echo "<br>The MMM and OOO Loops";
    echo "<br>==================================<br>";
    
function printMMM()
    {
    echo 'MMM';
    }
function printOOO()
    {
    echo 'OOO'; 
    }
    
    $a='printMMM';
    $b='printOOO';

    for($r=0; $r<8; $r++)
    {
        for($c=0; $c<3; $c++)
        { 
            $a();
            $b();
        }
      echo "<BR>";
    }   

//
// Multiplication Loop
//==================================
//
$Ari= array (1,2,3,4,5,6);

    

    
    
?>


