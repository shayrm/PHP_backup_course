<?php
echo '<h2>'.$one_coupon['name'].'</h2>';
echo $one_coupon['description'];
echo "<br >";

echo "The file name is: ".$one_coupon['imagefilename']."<br >";

echo "<img src=\"http://localhost/CodeWithZend/Coupons_Project/upload_Coupons/".$one_coupon['imagefilename']."\" border=\"3px\" alt=\"Coupon: name\" height=\"380\" width=\"380\">";

?>
