<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//-------!!!!!-----------
//to check with michael - why the file name is the name of the script
// the file could not be opened

header('Content-Type: application/zip');
if (isset($_POST['accept'])&& $_POST['accept']=="on"){
    //echo "<br>the file can be downloaded";
    $doc = file_get_contents('./meeting_7.zip');
    echo $doc;
}
 else {
     
   die();
 }
