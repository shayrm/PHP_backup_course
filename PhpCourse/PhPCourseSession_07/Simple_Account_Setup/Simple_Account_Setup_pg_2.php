<?php

session_start();
$_SESSION['first_name']=$_POST['first_name'];
$_SESSION['last_name']=$_POST['last_name'];

?>

<fieldset>
  <legend>Simple Account Setup</legend>
  <p>
<h3>Simple Account Setup page 2/3</h3>

<form action="./Simple_Account_Setup_pg_3.php" method="post" autocomplete="off">
    Choose username: <input type="text" name="username" placeholder="user name" required> 
    <br>
    Password: <input type="password" name="pwd" required placeholder="password">
    <br>
    Confirm Password: <input type="password" name="ConfirmedPwd" required>
    <br>
    email address <input type="email" name="email_1" placeholder="your-email@address.com" required>
    <br>   
    Confirm email address : <input type="email" name="email_2" required> 
    
    <br>
    <input type="submit" value="next"> 
</form>
</p>
</fieldset>
<hr></hr>

<?php

if(isset($_SESSION['message'])) {
    echo "<br><p style=\"font-size:20px; color:red;\">".$_SESSION['message']."</p>";
    unset($_SESSION['message']);
}
?>