<?php
/* this PHP script use CouponsPlatformDAOClass.php class file
 * and should export the content of the Coupon table to CSV file.
 */

include '../../OldCouponClassAndFiles/CouponClassBusiness.php';
include '../../OldCouponClassAndFiles/CouponsPlatformDAOClass.php';
include '../../OldCouponClassAndFiles/CouponMySQLConnection.php';
include '../../OldCouponClassAndFiles/Coupon_Function_file.php';

//$query="SELECT * FROM coupon_db.coupons";
//runCouponQuery($query,NULL);

$csv=true;
$coupunObject = new CouponsPlatformDAO;
$coupunObject->getCoupons($csv);