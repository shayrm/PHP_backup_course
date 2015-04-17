<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//
//The "if" and "if else" Control Statements
//
// (1) getting a number from the user and printing out 
// to the screen "positive" or "negative" in accordance with its value.

$Num1=$_GET['num1'];
$Num2=$_GET['num2'];
$Num3=$_GET['num3'];


if ($Num1 >0){
    echo "<br> the number $Num1 is a positive number<br>"; 
}
 else {
    echo "<br><h2 style=\"color:red\"> The number $Num1 is a negative number</h2><br>";
}

// (2)
// getting two numbers from the user and printing out to the screen the bigger one. 
//
echo "<br>##############################";
echo "<br>check who is the biger number";

if ($Num1>$Num2){
    echo "<br> The number <strong> $Num1 </strong>is bigger then $Num2";
}
elseif ($Num1==$Num2){
    echo "<br><h2> The number $Num1 and $Num2 are equal</h2>";
}
else {
    echo "<br> The number $Num2 is bigger then $Num1";
    }

    echo "<br>##############################";
    echo "<br>";
  //
  // (3)
  //checks whether 3 numbers can be the sizes of a given triangle. 
  //The algorithm should print out to the screen 
  //either "Triangle" or "Not Triangle".
     
echo "<br>checks whether 3 numbers can be the sizes of a given triangle";
if ($Num1<=($Num2+$Num3)&& $Num2<=($Num1+$Num3)&& $Num3<=($Num1+$Num2)) {
    echo "<br><h2 style=\"color:blue\"> We have a triangle !!!</h2>";
}
 else {
echo "<br><h2 style=\"color:red\">No triangle</h2>";    
}
echo "##############################";
    echo "<br>";
 
$pi_num=  pi();

// (4)
// calculate Rectangle Perimeter and area
//
echo "<br>calculate rectangle Perimeter and area from num1 and num2";

   if ($Num1<=0 or $Num2<=0){
       echo "<br> Sorry, I could not calculate rectangle";
   }
   else {
       echo "<br> The Perimeter of the given rectangle is: ".(2*$Num1+2*$Num2);
       echo "<br> The area of the given rectangle is: ".($Num1*$Num2);
   }
   
   echo "<br>##############################";
   
  //
  // (5)
  // Simple Boolean Expressions
  //
  $a=12; $b=5; $c=3; $d=11;
  echo"<br>";
  echo "<br> Simple Boolean Expressions calculations:";
  echo "<br>The assigned numbers are:<br><strong> a=$a, b=$b, c=$c, d=$d</strong>";
  echo "<br>the results are:";
  
  if ($a>$b) {
      echo "<br> a>b - TRUE";
  }
 else {
      echo "a>b FLASE";
      }
  
      if (($a+$b)<$c) {
      echo "<br>a+b)<c - TRUE";
  }
 else {
      echo "<br>(a+b)< c - FLASE";
      }
  
      //check if (a>b) && (b>c)
      
      if ($a>$b && $b>$c){
      echo "<br>(a>b) && (b>c) - TRUE";
      }
      else {
      echo "<br>(a>b) && (b>c) - FALSE";
      }
  
  // cehck (a<b) || (b<c)
  if ($a<$b || $b<$c){
      echo "<br>(a < b) || (b < c) - TRUE";
      }
      else {
      echo "<br>(a < b) || (b < c) - FALSE";
      }
  
  // check !(a<b)
      
      if (!($a<$b)){
      echo "<br>!(a < b) - TRUE";
      }
      else {
      echo "<br>!(a < b) - FALSE";
      }
  
?>