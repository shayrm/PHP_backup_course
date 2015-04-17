<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

header("Cache-Control: no-cache, must-revalidate");
header("Host: My host");
header("Expires: Mon, 31 Jan 2015 02:55:22 GMT");
header("User-Agent: This is not Chrom");
setcookie ('ID','100100',time()+10);
setcookie ('Owner','Shay RM');

$get_header=getallheaders();

//echo"<br> Befor modification";
//var_dump($get_header);

//Develop a PHP script that sends back together with its reply the required HTTP header 
//to instruct the browser to create a cookie with 
//"id" as its name and "100100" as its value. 
//That cookie should stay alive 30 days.

$id_val = $_COOKIE['ID'];
echo "<br>the Cookie ID was set to $id_val";
var_dump($_COOKIE);



?>