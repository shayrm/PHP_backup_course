<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_unset();
session_start();
?>
<fieldset>
  <legend>Simple Account Setup</legend>
  <p>
    <h3>Simple Account Setup page 1/2</h3>
    <p>Please enter the following information for registration</p>
    <form action="./Simple_Account_Setup_pg_2.php" method="post" autocomplete="off">
        First Name: <input type="text" name="first_name" placeholder="First Name" required> 
        <br> 
        Last Name: <input type="text" name="last_name" placeholder="last Name" required> 
        <br>
        <input type="submit" value="next"> 
    </form>
  </p>
</fieldset
<hr>

<?php
//$_SESSION['first_name']=$_POST['first_name'];
//$_SESSION['last_name']=$_POST['last_name'];
?>

