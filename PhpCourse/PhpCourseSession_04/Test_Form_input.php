<!--/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2num.php</title>
</head>

<body>
    <h2>2 Numbers Comparison</h2>

<form action="" method="post">


    <p>Please enter numbers : </p>

    A: <input type="text" name="a"/><br><br>
    B: <input type="text" name="b"/><br><br>

    <input type="submit"/>
</form><br>
</body>
</html>


<?php

if($_POST['a'] && $_POST['b'])

{
    $numA = $_POST['a'];
    $numB = $_POST['b'];

    if ($numA > $numB)
        {
            echo "A > B";
        }
        else
        {
            echo " A < B";        
        }
}
echo "<br>the numbers are $numA and $numB";
?>
