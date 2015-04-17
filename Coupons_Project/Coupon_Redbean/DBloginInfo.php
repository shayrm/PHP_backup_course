<?php

class DBinfo


{

 var $host="localhost";
 var $user="coupon";
 var $password="LetMeIn!!!";
 var $database="coupon_db";
 var $tableName="coupons";
 var $redbeanHost='mysql:host=localhost';
 var $redbeanConnect="mysql:host=localhost;dbname=coupon_db','coupon','LetMeIn!!!";

// connection for Redbean
// mysql:host=localhost;dbname=redbean','coupon','LetMeIn!!!
//$redbeanConn=('mysql:host='.$host';dbname='.$database.','.$password);

 function connectWithReadbeen()
 {
     return $this->redbeanConnect;
 }
 
}
?>