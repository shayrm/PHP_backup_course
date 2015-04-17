<?php

/*
 * export all coupons into CSV file
 */

include 'newCouponDAO_ver1.php';
$file = 'AllCouponsInfo.csv';

$couponInfo = new CouponsPlatformDAO();

$allCoupons=$couponInfo->getAllCoupons();

$fp = fopen($file,'a+');

foreach ($allCoupons as $obj)
{


    
    //fprintf($file,"%s,%s,%s,%s,%s,%s \n",$obj->id, $obj->category_id, $obj->business_id, $obj->name, $obj->description,$obj->imagefilename);
    fputcsv($fp, array($obj->id, $obj->category_id, $obj->business_id, $obj->name, $obj->description, $obj->imagefilename));
    
}

fclose($fp);


echo "<h3>CSV file named $file was created</h3>";
echo "<hr>";

echo "<table border=\"1\">";
$fo = fopen("$file", "r");
while (($line = fgetcsv($fo)) !== false) {
    echo "<tr>";
    foreach ($line as $cell) {
        echo "<td>" . htmlspecialchars($cell) . "</td>";
    }
    echo "</tr>\n";
}

fclose($fo);
echo "</table>";

?>