<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//var_dump($_FILES);

if (!empty($_FILES["file_name"]["name"]))
    {
    
    $C_folder=  getcwd();
    $file_name=$_FILES["file_name"]["name"];
    $file_temp=$_FILES["file_name"]["tmp_name"];
    $path="c:\Temp";
    
    chdir("c:\Temp");
    $D_file = $file_name;
    $D_folder=getcwd();
    
    echo "<br>File name to upload is <h4>$file_name</h4>";
    echo "<br> The current folder we use is <h4>$C_folder</h4>";
    
    echo "<br> The file will be copy to: <h3>$D_folder</h3>";
    echo "<hr>";
    
    if(move_uploaded_file($file_temp, $D_file)){
        echo "<br> The file was successfuly copy to the new location";
        echo "<br>File name was: $file_name <br>and directory was $D_folder";
    }
    else {
        echo "<br>There was a problem with copying the file";
        echo "<br>File name was: $file_name <br>and directory was $D_file";
    }
}
 else {
     echo "Error - No file was choosen";
}
    
    
        
       


?>