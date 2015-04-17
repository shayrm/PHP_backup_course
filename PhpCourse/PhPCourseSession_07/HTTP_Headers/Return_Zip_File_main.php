<?php
header("Cache-Control: no-cache, must-revalidate");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//-------!!!!!-----------
//to check with michael - why the file name is the name of the script
// the file could not be opened

echo "<h1> Terms and conditions </h1>";
echo <<<END
    <br>Create a simple zip file and place it on your server. 
    <br>Create a simple PHP document that includes a form 
    <br>with a small check box the user can mark to indicate 
    <br>the acceptance of the terms & conditions and a button named "Download". 
    <br>When the user presses that button a request is sent from that form 
    <br>to get the zip file. 
        <br>If the terms & conditions were accepted the user should get the file. 
        <br>If the terms & conditions weren't accepted the user should get a document 
        <br>saying that without accepting the terms & conditions it is impossible to download the file.
END;

echo "<p>";
?>

<form action="Return_Zip_File_DW.php" method="POST" autocomplete="off">
    <br>
    <input type="checkbox" name="accept" value=""/>
    <p style="color: red ;display:inline"> Please accept the conditions </p>
    <br>   
    <input type="submit" value="Download" />
</form>

<?php

/*check if "accept" was set
if (isset($_POST['accept'])&& $_POST['accept']=="on"){
    echo "<br>the file can be downloaded";
}
 else {
   die();
     //echo "you can not downlod the file without first accepting the conditions";
 }
*/
?>