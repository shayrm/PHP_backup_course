<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
    $_SESSION['first_name']=$_GET['first_name'];
    $_SESSION['last_name']=$_GET['last_name']; 
?> 
<h3>Simple Registration Session page 2/5</h3>

<form action="./Simple_Registration_Session_pg_3.php" method="get">
    ID: <input type="text" name="id"> 
    <br> 
    Email Address: <input type="text" name="email_address"> 
    <br>
    <input type="submit" value="next"> 
</form>
<hr></hr>

<?php 
foreach($_SESSION as $k => $val)
{
 echo "<BR>$k=>$val";
}
?>