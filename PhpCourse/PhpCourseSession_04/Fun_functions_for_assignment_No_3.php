<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The function assignment - Meeting # 3</title>
</head>

<body>
    <h1 style="color:blue"> Introduction to Basic PHP Programming </h1>
    <h3 style="color:brown"> PHP course - Session # 3 </h3>
    <hr />

    <form action="" method="post">
    <p style="color:blueviolet; font-size:20px"> Please enter the number to be divided: </p>
    Enter Range:            <input type="number" name="Range" min="1" max="1000" value=""/>
    Enter Number to Div:    <input type="number" name="num" min="1" max="100" value=""/>
    
    <input type="submit" value="Send it-->"/> <input type="reset" value="Reset"/>
    </form><br>
    <hr />
</body>
</html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// The Pow Recursive Function
//===================================================
//

//his function should receive two parameters and return their pow (e.g. my_pow(2,3) 
//should return 2*2*2, which is 8).

function my_pow ($numA, $numB){
    if ($numB==1){
        return $numA*1;
    }
    $result= $numA*my_pow($numA,$numB-1);
    echo "x".$numA;
    return $result;
}

$num1=2;
$num2=8;
echo "<br><h4>The my_pow_function calculation of $num1 times $num2 is:<br>".$num1;
$out_pow=my_pow($num1,$num2);
echo "<br><br>and equal to= $out_pow</h4><br>";
echo "==============================================================<br>";


//factorial function
//====================================================
// factorial function, that receives an integer number, 
// calculates its factorial in a recursive way 
// and returns the result. 

function Fac_Rec ($num){
    if ($num==1){
        return 1;
    }
    $result = $num *Fac_Rec ($num-1);
    return $result;
}
$input=6;
$out_fac=  Fac_Rec($input);
echo "The factorial calculation of $input is: $out_fac<br>";
echo "==============================================================<br>";

// Divide a range of number without residual 
//========================================================
//

$numA = $_POST['num'];
$range = $_POST['Range'];

function Div_Me ($num,$range){
    for ($i=$range;$i>0;$i--){
        if ($i%$num==0){
            echo $i.",";
        }
    }
    return;
}

echo "The chosen range is <strong>$range</strong> and the divided number is <strong>$numA</strong><br>";
echo "==============================================================<br>";
Div_Me($numA, $range);

//
//Line Printing Function
//================================================================
//
echo "<h3 style=\"color:blue\">A function that prints out to the screen a Line Printing Function</h3>";

function Print_Me ($string, $num){
    for ($i=0; $i<$num; $i++){
        
        for ($r=0; $r<=$i; $r++){
            echo $string;
        }
        echo "<br>";
    }
    return;
}

Print_Me('*',5);

//
//A function that prints out to the screen a standard HTML table
//================================================================
//

function Draw_Table ($tr, $td){
    for ($i=0; $i<$tr; $i++){
        echo "<tr>";
        for ($r=0; $r<$td; $r++){
            echo "<td>Cell input $r</td>";
        }
        echo "</tr>";
    }
    
    return;
}


echo "<h3 style=\"color:blue\">A function that prints out to the screen a standard HTML table.<br> "
. "The number of rows and columns should be passed to the function</h3>";

echo "<table border=\"1\">";
Draw_Table(8, 10);
echo "</table>";

?>