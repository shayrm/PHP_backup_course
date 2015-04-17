<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
    $_SESSION['email_address']=$_GET['email_address'];
    $_SESSION['id']=$_GET['id']; 
?> 

<h3>Simple Registration Session page 3/5</h3>
<form action="./Simple_Registration_Session_pg_4.php" method="get">
Mobile Number: <input type="text" name="mobile_number"> 
<br> 
Web_Site: <input type="text" name="web_site"> 
<br>
<input type="submit" value="next"> 
</form>
<hr>
<?php 
foreach($_SESSION as $k => $val)
{
 echo "<BR>$k=>$val";
}
?>
