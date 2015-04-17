<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "<h3> Example for implode</h3>";
$fruits=array("banana","watermalon","orange");
$delimiter=",";
$str1=implode($delimiter,$fruits);
echo "\$str1=$str1";


echo "<h3> Example for explode</h3>";
$str2="watermalon,banana,orange";

$array=explode($delimiter,$str2);
foreach($array as $k => $v)
{
 echo "<br>$v";
}


?>
