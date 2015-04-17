<?php
/*
 * this script will use Redbean framework
 * to connect to the mySQL DB
 */
include 'rb.php';
include 'DBloginInfo.php';

R::setup('mysql:host=localhost;dbname=coupon_db','coupon','LetMeIn!!!');



//setting the debugging mode
R::debug(true);

$id=3;
$getID=R::find('coupons','id='.$id);

//var_dump($getID);

$ob =  $getID[3];

var_dump($ob->name);

echo "<hr>";
echo $getID[$id]->name;