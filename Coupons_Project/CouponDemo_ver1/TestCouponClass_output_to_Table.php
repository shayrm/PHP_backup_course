<?php

//namespace Com\ShayMCoupon\Samples;
//include 'CouponClassCoupon.php';

include 'newCouponDAO_ver1.php';

$couponInfo = new CouponsPlatformDAO();
$id=5;
$oneCoupon=$couponInfo->getCoupon($id);

echo "<h2>Coupons info:</h2><br>";
echo "<hr>";
echo "ID: --$oneCoupon->id<br>";
echo "Business ID: -- $oneCoupon->business_id<br>";
echo "Name: -- $oneCoupon->name<br>";
echo "Desciption: --$oneCoupon->description<br>";
echo "Image file name: --$oneCoupon->imagefilename<br>";


$allCoupons=$couponInfo->getAllCoupons();


//use PURE favicon file
echo "<link rel=\"shortcut icon\" href=\"../bootstrap-3.0.0/assets/ico/favicon.png\">";

//loading Pure CSS file
echo "<link href=\"Coupon_CSS_file_from_Pure-min.css\" rel=\"stylesheet\">";

echo "<br>";
echo "<hr>";
$lenght=count($allCoupons);
echo "<br>The size of all coupon array is $lenght<br>";
//var_dump($allCoupons);

echo <<<END
<div class="pure-menu pure-menu-open pure-menu-horizontal">
            <a href="#" class="pure-menu-heading">Coupon Admin</a>
            
            <ul>
                <li class="pure-menu-selected"><a href="./NewCouponCreator_Form_page.html">New Coupon</a></li>
                <li><a href="./NewBusinessCreator_Form_page.html">New Business</a></li>
                <li><a href="./NewCategoryCreator_Form_page.html">New Category</a></li>
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

foreach ($allCoupons as $obj)
{
    

    echo "<tr>";
    echo "<td>$obj->id</td>";
    echo "<td>$obj->category_id</td>";
    echo "<td>$obj->business_id</td>";
    echo "<td>$obj->name</td>";
    echo "<td>$obj->description</td>";
    echo "<td>$obj->imagefilename</td>";
    echo "</tr>";
    
}            

echo "</table>";
            
?>