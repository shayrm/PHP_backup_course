
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// ######## Simple Variables ######//
// (1) Variables Swap // algorithm that swaps between the values of two variables

$Num1=$_GET['num1'];
$Num2=$_GET['num2'];

echo "<br>Befroe Swapp the value of the numbers are:<br> NumA=$Num1<br> NumB=$Num2<br>";

//Swap the numbers

$tmp=$Num1;
$Num1=$Num2;
$Num2=$tmp;

echo "<br><h3>Now, after Swap the value of the numbers are:</h3><br>NumA=$Num1 <br>NumB=$Num2<br>";
echo "<br><p style=\"color:blue\">###### End of Assignment Simple Variables #######</p><br><br>";

// (2) swaps between the values of two variables. You are not allowed to use a third variable.

// =============================================================================================
//
//  ######## Inputs and Outpus  #########
//(1) Difference Calculation 
//    receives two numbers from the user and prints out the difference
//

echo "<form method=\"post\">"
                        ."First number: <input type=\"text\" name=\"NumA\" value=\"\"><br> "
                        ."Second number: <input type=\"text\" name=\"NumB\" value=\"\"><br>"
                    ."<input type=\"submit\" value=\"Submit\"></form>";


$VarA=  filter_input(INPUT_POST, 'NumA', FILTER_VALIDATE_INT);
$VarB=  filter_input(INPUT_POST, 'NumB', FILTER_VALIDATE_INT);

//$VarB=$_POST['NumB'];

echo "The first number is: $VarA";
echo "<br>The Second number is: $VarB";

if ($VarA==$VarB)
    {
    echo "<br><h3 style=\"color:blue\">The number $VarA and $VarB are equal</h3>";
}
else {
    echo "<br><h2 style=\"color:red\">The number $VarA and $VarB are not equal</h2>";
}

//prints out their sum.

echo "the <strong>sum</strong> of these two numbers is: ".($VarA+$VarB);

// prints out their multiplication

echo "<br>the <strong>multiplication</strong> of these two numbers is: ".($VarA*$VarB);

// dividing the first by the second
echo "<br>the <strong>diviation</strong> of these two numbers is: ".($VarA/$VarB);

//swap the two variables and print out their values with two variables only

list($VarA,$VarB) = array($VarB, $VarA);
echo "<br>";
echo "<br>Now, after swap the first number is :$VarA";
echo "<br>Now after swap the second number is: $VarB";

echo "<br><p style=\"color:blue\">###### End of Inputs and Outpus #######</p><br><br>";

//=======================================================
//Simple Integers Array 
//
// (1) creation of a simple array of 4 integers that holds the following numbers: 12,14,16 and 18.
//
$Heary = array (
    "one" => 12,
    "two" => 14,
    "three" => 16,
    "four" => 18
);

var_dump($Heary);

//
// (2) Fibonachi Array 
// algorithm that calculates and places the first 5 numbers of the fibonachi series 
// within an array (with the size of 5).

echo "<br>Fibonachi Series calcluation with Array";
$Fib = Array (
    "F1" => 1,
    "F2" => 1,
    "F3" => 0,
    "F4" => 0,
    "F5" =>0
    );

$Fib['F3']= $Fib['F2']+$Fib['F1'];
$Fib['F4']= $Fib['F3']+$Fib['F2'];
$Fib['F5']= $Fib['F4']+$Fib['F3'];

var_dump($Fib);

echo "<br>########################################<br>";


// (3) Simple Sort 
// receives three numbers from the user, stores them within an array, 
// sorts that array and print out the sorted numbers.


echo "<form method=post> First number: <input type=\"text\" name=\"num1\" value=\"\"><br> "
                        ."Second number: <input type=\"text\" name=\"num2\" value=\"\"><br>"
                        ."Third number: <input type=\"text\" name=\"num3\" value=\"\"><br>"
                        ."<input type=\"submit\" value=\"Submit\"></form>";

//align the numbers into the array

$Sort_Ary =array($_POST['num1'], $_POST['num2'],$_POST['num3']);

echo "The array before sort:<br>";
echo $Sort_Ary[0]."<br>";
echo $Sort_Ary[1]."<br>";
echo $Sort_Ary[2]."<br>";

echo "<h2>The array after sort</h2>";
sort($Sort_Ary);

var_dump($Sort_Ary);


//
//(4) Sum Of Array Numbers
//
//array of all numbers in between 1 and 10. 
//The program should calculate the multiplication of all numbers 
//in that array and print it to the screen.

$One_to_Ten=array(1,2,3,4,5,6,7,8,9,10);
var_dump($One_to_Ten);

echo "The product of this array is= " . array_product($One_to_Ten) . "\n";
echo "<br>";
echo "<br>################ End of Array assignment ###################";


?>


