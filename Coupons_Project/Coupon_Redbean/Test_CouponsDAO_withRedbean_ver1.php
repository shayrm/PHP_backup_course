<?php


include 'newCouponDAOwithRedbean_ver1.php';

$ob= new CouponsPlatformDAO();
$allCouponsInfo=$ob->getAllCoupons();

//var_dump($allCouponsInfo);

foreach ($allCouponsInfo as $key1)
{
    foreach ($key1 as $key2=>$value)
    {
    echo "<br>$key2 = $value";
    }
    echo "<hr>";
}

$id=5;
$getOneCoupon=$ob->getCoupon($id);



echo "<hr>";
echo "For coupond ID=$id,<br>The name of coupon is:" .$getOneCoupon[$id]->name;
echo "<br> The coupon description:".$getOneCoupon[$id]->description;
echo "";
echo "<br>File nane:".$getOneCoupon[$id]->imagefilename;
echo "<br>";
echo "<img src=\"/CodeWithZend/Coupons_Project/upload_Coupons/{$getOneCoupon[$id]->imagefilename}\" alt=\"{$getOneCoupon[$id]->name}\" height=\"450\" width=\"450\">";

?>