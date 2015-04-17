<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// ######## Simple Variables ######//
// (1) Variables Swap // algorithm that swaps between the values of two variables

//$NumA=$_GET['numA'];
//$NumB=$_GET['numB'];
$NumA=20;
$NumB=40;
echo "<br>Befroe Swapp the value of the numbers are:<br> NumA=$NumA<br> NumB=$NumB<br>";

//Swap the numbers

$tmp=$NumA;
$NumA=$NumB;
$NumB=$tmp;

echo "<br> Now after Swap<br> the value of the numbers are:<br> NumA=$NumA<br> NumB=$NumB<br>";

$_GET['search'] = 'foo'; // This has no effect on the filter_input

$search_html = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_SPECIAL_CHARS);
$search_url = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_ENCODED);
echo "You have searched for $search_html.\n";
echo "<a href='?search=$search_url'>Search again.</a>";

?>
