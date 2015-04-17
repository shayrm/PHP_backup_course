
<table>
<?php foreach ($coupons as $line): ?>
    <tr><td>
    <h2><?php echo "Coupon name: " .$line['name'] ?></h2>
    </td></tr>
    <tr><td>
    <div class="main">
        <?php echo $line['description'] ?>
        </td>
        <td>
        <br>
        <img src="http://localhost/CodeWithZend/Coupons_Project/upload_Coupons/<?php echo $line['imagefilename']?> " 
        border="3px" 
        alt="Coupon: <?php echo $line['name']?>" 
        height="180" width="180">
        
    </div>
    <p><a href="http://localhost/CodeWithZend/Coupons_Project/CouponWithCI/CodeIgniter-2.2-stable/index.php/couponspages/getcoupon/<?php echo $line['id'] ?>">View coupon</a></p>
    <p></p>
    </td>
    </tr>
    
<?php endforeach ?>

</table>