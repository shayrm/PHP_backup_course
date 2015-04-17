<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//get the numA and numB the user send
$numA = $_GET['numA'];
$numB = $_GET['numB'];

//Print out the values

echo "<br> numA=".$numA ."<br> numB=".$numB;
$tmp = $numA;
$numA = $numB;
$numB = $tmp;
?>
