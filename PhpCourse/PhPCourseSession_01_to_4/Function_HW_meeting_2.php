

<!--/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The function assignment - Meeting # 2</title>
</head>

<body>
    
    <h1 style="color:blue"> Introduction to Procedural Programming </h1>
    <h3 style="color:brown"> PHP course - Session # 2 </h3>
    <hr />
    
    <p> function that calculate <strong>Rectangle Area & Perimeter</strong> <br>
            when it gets the inputs of the base and high of the rectangle </p>

<form action="" method="post">
  
    <p style="color:blueviolet; font-size:20px"> Please enter the Rectangle inputs: </p>
    Rectangle High: <input type="number" name="High" min="1" max="100" value=""/><br>
    Rectangle Base: <input type="number" name="Base" min="1" max="100" value=""/><br>
    <hr>
    <p> function that calculate <strong>Circe Area & Perimeter</strong> <br>
    when it gets the inputs of the <strong>Radius</strong> as an input</p>
    
    <p style="color:blueviolet; font-size:20px"> Please enter the Radius: </p>
    Circle Radius: <input type="number" name="Radius" min="1" max="100" value=""/>
    
    <p style="color:blueviolet; font-size:20px"> Please enter four numbers (1-100): </p>
    1st Number: <input type="number" name="num1" min="1" max="100" value=""/><br>
    2nd Number: <input type="number" name="num2" min="1" max="100" value=""/><br>
    3rd Number: <input type="number" name="num3" min="1" max="100" value=""/><br>
    4th Number: <input type="number" name="num4" min="1" max="100" value=""/><br>
    
    <input type="submit" value="Send it-->"/> <input type="reset" value="Reset"/>
</form><br>
<hr />
    
<br>

</body>
</html>

<?php

//
//Function to be inlude:
//

// // function that calculate *Rectangle Area* when it gets the inputs of 
// the baes and high of the rectangle

function Rec_Area ($base, $high) {
    $Area=($base*$high)/2;
    return $Area;
}

//function that calculate *Rectangle Perimeter* 
// the function receive the rectange parameters

function Rec_Per($base, $high){
    $Per=2*($base+$high);
    return $Per;
}

// function that calculate *Circle Perimeter*
// the function receive radius R as input

function Cir_Per ($red){
    $Per=2*3.14*$red;
    return $Per;
}

// calculate the Biggest of Four Number (option 3)
//
function The_Biggest($numA,$numB,$numC,$numD){
    $Ari= array ($numA,$numB,$numC,$numD);
    $big=max($Ari);
    return $big;
    }

//=============================================
// Execution part
//=============================================

if (isset($_POST['High']) && isset($_POST['Base']))
    {
        $numA = &$_POST['High'];
        $numB = &$_POST['Base'];    

    $output_Area=Rec_Area($numA,$numB);
        echo "<h4>The area of this Rectangle is: <em>$output_Area</em></h4>";
    
    $output_Per=Rec_Per($numA,$numB);
        echo "<h4>The Perimiter of this Rectangle is: <em>$output_Per</em></h4>";
        echo "<hr>";
      }    
    
if (isset($_POST['Radius']))
    {
        $numA = &$_POST['Radius'];
        $output_Cir_Per = Cir_Per($numA);
        echo "<h4>The Perimeter of this Circle is: <em>$output_Cir_Per</em></h4>";

    echo "<hr>";
    }
    
if (isset($_POST['num1']) && isset($_POST['num2'])&& isset($_POST['num3']) && isset($_POST['num4']))
    {
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $num3=$_POST['num3'];
    $num4=$_POST['num4'];
    
    $output_big = The_Biggest($num1,$num2,$num3,$num4);
    echo "<h4>The biggest number is: <em>$output_big</em></h4>";
    echo "<hr>";
    }


?>