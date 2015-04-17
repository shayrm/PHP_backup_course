<?php
include '../../OldCouponClassAndFiles/CouponClassBusiness.php';
include '../../OldCouponClassAndFiles/CouponsPlatformDAOClass.php';
include '../../OldCouponClassAndFiles/CouponMySQLConnection.php';
include '../../OldCouponClassAndFiles/Coupon_Function_file.php';

//$query="SELECT * FROM coupon_db.coupons";
//runCouponQuery($query,NULL);

$csv=null;  
$coupunObject = new CouponsPlatformDAO;
$coupunObject->getCoupons($csv);

