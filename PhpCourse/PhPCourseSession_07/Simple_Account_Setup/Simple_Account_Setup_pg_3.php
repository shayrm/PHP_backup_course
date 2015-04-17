<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

function flash_message($message) {
    // start session if not started
    $_SESSION['message'] = $message;
}

//$_SESSION['first_name']=$_POST['first_name'];
//$_SESSION['last_name']=$_POST['last_name'];

$_SESSION['username']=$_POST['username'];
$_SESSION['pwd']=$_POST['pwd'];
$_SESSION['ConfirmedPwd']=$_POST['ConfirmedPwd'];
$_SESSION['email_1']=$_POST['email_1'];
$_SESSION['email_2']=$_POST['email_2'];


if($_SESSION['pwd'] != $_SESSION['ConfirmedPwd'])
{
    // You don't want an already logged in user to try to log in.
    flash_message('Password do not match. Please reenter the password');
    header("Location: ./Simple_Account_Setup_pg_2.php");
}

else {
    echo "Thank you, for your registration";
    session_unset();
}
 

?>