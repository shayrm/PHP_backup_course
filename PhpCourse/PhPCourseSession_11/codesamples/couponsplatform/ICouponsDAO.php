<?php
interface ICouponsDAO
{
	public function getCoupon($id);
	public function deleteCoupon(Coupon $coupon);
	public function getCoupons();
	public function updateCoupon(Coupon $coupon);
	//..
}