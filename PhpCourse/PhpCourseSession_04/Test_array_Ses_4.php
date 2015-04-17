<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$a=3;
$b=4;
$c= $a+$b;
echo "the result of $a plus $b is equal to $c";

$vec = array ();
$vec[1111] = "Danidin Cohen";
$vec[2222] = "Robert Austin";
$vec[3333] = "Big Libovskey";

var_dump($vec);

echo "<br>the content of Vec is:";

foreach ($vec as $k => $v){
echo "<br> In <b>$k</b> we have <b>$v</b>"; 
    
}

?>