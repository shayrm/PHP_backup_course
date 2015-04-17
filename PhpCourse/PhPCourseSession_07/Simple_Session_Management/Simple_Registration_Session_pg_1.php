<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
?>
<h3>Simple Registration Session page 1/5</h3>
    <form action="./Simple_Registration_Session_pg_2.php" method="get">
    First Name: <input type="text" name="first_name"> 
<br> 
Last Name: <input type="text" name="last_name"> 
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