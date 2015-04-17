<?php

//namespace Com\ShayMCoupon\Samples;
//include 'CouponClassCoupon.php';

include 'newCouponDAOwithRedbean_ver1.php';

$ob= new CouponsPlatformDAO();
$allCouponsInfo=$ob->getAllCoupons();

echo "<h2>Coupons info:</h2><br>";
echo "<hr>";


//use PURE favicon file
echo "<link rel=\"shortcut icon\" href=\"../bootstrap-3.0.0/assets/ico/favicon.png\">";

//loading Pure CSS file
echo "<link href=\"../css/Coupon_CSS_file_from_Pure-min.css\" rel=\"stylesheet\">";

echo "<br>";
echo "<hr>";

echo <<<END
<div class="pure-menu pure-menu-open pure-menu-horizontal">
            <a href="#" class="pure-menu-heading">Coupon Admin</a>
            
            <ul>
                <li class="pure-menu-selected"><a href="../CouponIndex_HTML_and_main_web/NewCouponCreator_Form_page.html">New Coupon</a></li>
                <li><a href="../CouponIndex_HTML_and_main_web/NewBusinessCreator_Form_page.html">New Business</a></li>
                <li><a href="../CouponIndex_HTML_and_main_web/NewCategoryCreator_Form_page.html">New Category</a></li>
                </ul>
            </div>
END;
            
            echo "<br>";
            echo "<hr>";
            echo <<<END
                 <div class="pure-g">
                    <div class="pure-u-2-5"><h2>Copun list:</h2></div>
                    <div class="pure-u-2-5"><h3>The content of the Coupon table</h3></div>
                 </div>
END;
            echo "<table class=\"pure-table pure-table-horizontal\">";
            echo "<thead><tr>";
            echo "<th>ID</th><th>Cat_id</th><th>Bus_id</th><th>coupon name</th><th>description</th><th>imagefilename</th>";
            echo "</tr></thead>";    

            
            
            foreach ($allCouponsInfo as $key1)
            {
                echo "<tr>";
                foreach ($key1 as $key2=>$value)
                {
                    echo "<td>";
                    echo "<br>$value";
                    echo "</td>";
                }
                echo "</tr>";
            }
            

echo "</table>";
echo "<hr>";
echo "<h3>the DB request was made with Redbean php framework</h3>";

//test the getCoupon with specific ID
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