<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Rectangle {
    var $width;
    var $height;
    function area (){
        return $this->width * $this->height;
    }

}

$ob= new Rectangle();
$ob ->width =3;
$ob ->height=4;

echo "<h2> The area is: ".$ob ->area();
?>
