

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Check who is big</title>
</head>

<body>
    <h2>2 Numbers Comparison</h2>

<form action="" method="get">


    <h2>Please enter numbers : </h2>

    Number A: <input type="text" name="a"/><br><br>
    NUmber B: <input type="text" name="b"/><br><br>

    <input type="submit"/>
</form><br>
</body>
</html>


<?php

if($_GET['a'] && $_GET['b'])

{
    $numA = $_GET['a'];
    $numB = $_GET['b'];

    if ($numA > $numB)
        {
            echo "The number A is bigger then B";
        }
        else
        {
            echo "The number B is bigger then A";        
        }
}
?>