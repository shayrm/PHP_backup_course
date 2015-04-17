<!DOCTYPE html>
<html>
    <head>
       <!-- <link type="text/css" rel="stylesheet" href="stylesheet.css"></link> -->
        <title>The function assignment - Meeting # 2</title>
    </head>
<body>

<h1 style="color:blue"> Introduction to Procedural Programming </h1>

<hr />
<p> function that calculate <strong>Rectangle Area</strong> <br>
when it gets the inputs of the base and high of the rectangle </p>

<form action="" method="post">
    
<p style="color:blueviolet"> Please enter the Rectangle inputs: </p>

Rectangle High <input type=”text” name=”aaa” value=""/> <br>
Rectangle Base <input type=”text” name=”bbb” value=""/> <br>
<input type="submit"/>

</form>
</body>
</html>

<?php

/* function that calculate *Rectangle Area* when it gets the inputs of 
// the baes and high of the rectangle

//function Rec_Area ($base, $high) {
    $Area=($base*$high)/2;
    return $Area;
}
 
 
*/
//if ($_GET['rec_high'] && $_GET['rec_base']){

$h = $_POST['aaa'];
$b = $_POST['bbb'];

//echo "<br> the numbers are: $h and $b";
if ($_POST["aaa"] && $_POST["bbb"]){
    
echo "the first number is".$_POST["aaa"]."and the second number is:".$_POST["bbb"];
}
//$output=Rec_Area($h,$b);
//echo "<br>The area of this Rectangle is: $output";

//}	

?>

   