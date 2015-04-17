<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$doc = file_get_contents('http://www.abelski.com/courses/php/introduction.pdf ');
header('Content-Type: application/pdf');
echo $doc;
?>
