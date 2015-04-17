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

echo "<h3>Allows the user to enter 2 numbers and get their <br>multiplication, sum and difference.</h3>"
?>


<html lang="he-IL">
    <head>
        <title>Ses-5 home work Simple Computation Form</title>
    </head>
    
    <body>
        <form method="POST">
            <br> Please Enter the first number <input type="number" name="Num1">
            <br> Please Enter the second number <input type="number" name="Num2">
            <br> <ul>please choose which operation to make:</ul>
            <input type="checkbox" name="Operation[]" value="sum">Sum Calculation:<br>
            <input type="checkbox" name="Operation[]" value="mul">Multiplication Calculation: <br>
            <input type="checkbox" name="Operation[]" value="diff">Check if difference Calculation:<br> 
            
            <br><input type="image" src="img_submit.gif" alt="submit" name="Submit" width="68" height="68"> Submit here 
        </form>
    </body>
</html>

<?php

//Simple Computation Form
//=====================================================================================
//You should develop a PHP web based application that allows the user to enter 2 numbers 
//and get their multiplication, sum and difference. 
//The user should be able to select one of those three available operations before submitting his request.


if (isset($_POST['Num1'])&& isset($_POST['Num2'])){ 

    $Num1=$_REQUEST['Num1'];
    $Num2=$_REQUEST['Num2'];

    echo "<br>Num1 is: $Num1";
    echo "<br>Num2 is: $Num2";

    $oper=$_POST['Operation'];

}

if (!empty($Num1) && !empty($Num1)){
        if (is_array($oper)){
            foreach ($oper as $key => $value){
                if($value=="sum"){
                    echo "<br>The sum of the number $Num1 and $Num2 is ". ($Num1+$Num2);
                }
                if($value=="mul"){
                    echo "<br>The multiplaction of the number $Num1 and $Num2 is ". ($Num1*$Num2);
                }
                if($value=="diff"){
                    if ($Num1==$Num2){
                        echo "<br>The numbers $Num1 and $Num2 are equal";
                    }
                    else {
                          echo "<br>The numbers $Num1 and $Num2 are NOT equal";
                    }
                    
                }            
            }
        }
}
else {
    echo "<br><script> alert(\"No mubers were entered, please enter number and chooe\");</script>";
}
    


?>
