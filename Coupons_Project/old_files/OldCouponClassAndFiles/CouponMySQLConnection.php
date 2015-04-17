<?php
/*
 * this file execute MySQL connection to the database.
 * It is also add, delede or modify tables in the assign DB.
 */

//DB information;
$host="localhost";
$user="coupon";
$pass="LetMeIn!!!";
$database="coupon_db";

$mysqli=new mysqli($host, $user, $pass, $database);

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    exit();
}

