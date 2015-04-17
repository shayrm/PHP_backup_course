<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
$_SESSION['mobile_number']=$_GET['mobile_number'];
$_SESSION['web_site']=$_GET['web_site']; 
?> 
<h3>Simple Registration Session page 4/5</h3>
You are about to complete the registration with the following details: 
<br>First Name: <?php echo $_SESSION['first_name']?>
<br>Last Name: <?php echo $_SESSION['last_name']?>
<br>Emails Address: <?php echo $_SESSION['email_address']?>
<br>ID: <?php echo $_SESSION['id']?>
<br>Web Site: <?php echo $_SESSION['web_site']?>
<br>Mobile Number: <?php echo $_SESSION['mobile_number']?> 
<br> 
<br> 
In order to complete the registration you should press the complete button below.
<br>
<br>
<form action="./Simple_Registration_Session_pg_5.php" method="get">
<input type=submit>
</form>
<hr>
<?php 
foreach($_SESSION as $k => $val)
{
 echo "<BR>$k=>$val";
}
?>