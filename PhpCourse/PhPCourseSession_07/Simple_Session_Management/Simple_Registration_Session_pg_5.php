<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
?>

<h3>Simple Registration Session page 5/5</h3>
Thanks for registering the following details: 
<br>First Name: <?php echo $_SESSION['first_name']?>
<br>Last Name: <?php echo $_SESSION['last_name']?>
<br>Emails Address: <?php echo $_SESSION['email_address']?>
<br>ID: <?php echo $_SESSION['id']?>
<br>Web Site: <?php echo $_SESSION['web_site']?>
<br>Mobile Number <?php echo $_SESSION['mobile_number']?> 
<hr>
<?php 
foreach($_SESSION as $k => $val)
{
 echo "<BR>$k=>$val";
}
?>