<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//The following PHP web application should return back to the user 
//the small video clip youtube shows at http://www.youtube.com/v/gvfd6URCXYs. 
//You should complete the missing code.

header('Content-Type: application/x-shockwave-flash');
$movie = file_get_contents('http://www.youtube.com/embed/VQH8ZTgna3Q?rel=0&autoplay=1');

echo $movie;

?>
