<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//$source='http://www.lifemichael.com/en/wp-content/uploads/2009/01/thinkingsport.jpg';
header("Content-Type: image/jpg");
$img = file_get_contents('http://www.lifemichael.com/en/wp-content/uploads/2009/01/thinkingsport.jpg'); 

//imagejpeg($source);
echo $img; 

?>
