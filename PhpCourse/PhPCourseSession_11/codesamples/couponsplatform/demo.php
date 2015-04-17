<?php


$dao = new MySQLCouponsDAO();

try
{
	$product = $dao->getCoupon(101);
	
	
	
}
catch(CouponsPlatformException $e)
{
	
}
