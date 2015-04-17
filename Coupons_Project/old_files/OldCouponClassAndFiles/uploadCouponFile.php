<?php

//upload file validation
//there is another validation on the form side as well.

/*
 * include Coupon Class file
 */

include '../../OldCouponClassAndFiles/CouponClassCategory.php';
include '../../OldCouponClassAndFiles/CouponClassCoupon.php';

    //loading favicon file
    echo "<link rel=\"shortcut icon\" href=\"bootstrap-3.0.0/assets/ico/favicon.png\">";
		
	//loading Pure CSS file
    echo "<link href=\"Coupon_CSS_file_from_Pure-min.css\" rel=\"stylesheet\">";

    var_dump($_FILES);
    var_dump($_POST);

//loading the file and copy it to the destination directory
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["fileCoupon"]["name"]);
$extension = end($temp);

    if ((($_FILES["fileCoupon"]["type"] == "image/gif")
        || ($_FILES["fileCoupon"]["type"] == "image/jpeg")
        || ($_FILES["fileCoupon"]["type"] == "image/jpg")
        || ($_FILES["fileCoupon"]["type"] == "image/pjpeg")
        || ($_FILES["fileCoupon"]["type"] == "image/x-png")
        || ($_FILES["fileCoupon"]["type"] == "image/png"))
        && ($_FILES["fileCoupon"]["size"] < 120000000)
        && in_array($extension, $allowedExts)) {
    
    if ($_FILES["fileCoupon"]["error"] > 0) {
    echo "<h2 style=\"color:red;\"> Error upload coupon - Return Code: " . $_FILES["fileCoupon"]["error"] . "</h2><br>";
    } 
  
    else {
    echo "<h1 style=\"color:blue;\"> upload success !!!</h1>";  
    echo "Upload: " . $_FILES["fileCoupon"]["name"] . "<br>";
    echo "Type: " . $_FILES["fileCoupon"]["type"] . "<br>";
    echo "Size: " . ($_FILES["fileCoupon"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["fileCoupon"]["tmp_name"] . "<br>";
    
    if (file_exists("upload_Coupons/" . $_FILES["fileCoupon"]["name"])) {
      echo $_FILES["fileCoupon"]["name"] . " <h3>file already exists. </h3>";
    
    } else {
      
        move_uploaded_file($_FILES["fileCoupon"]["tmp_name"],"upload_Coupons/" . $_FILES["fileCoupon"]["name"]);
      echo "File Stored in: " . "upload_Coupons/" . $_FILES["fileCoupon"]["name"];
      echo "<br>";
      
      //collecting the coupon info from the form
      
      $name=$_POST['couponName'];
      $couponDesc=$_POST['couponDesc'];
      $category_id=$_POST['couponCategoryID'];
      $business_id=$_POST['businessID'];
      $imagefilename=$_FILES['fileCoupon']['name'];
      
      $newCoupon = new Coupon($category_id, $business_id, $name, $couponDesc, $imagefilename);
      $newCoupon->enterNewCoupon();
      
      //$CouponObject = new Coupon($id, $catgory_id, $business_id, $name, $description, $imagefilename)
      
      
      
      
    }
  }
} else {
  echo "Invalid file";
}

echo "<hr>";
echo "<br>";

echo "<a class=\"pure-button pure-button-active\" href=\"./NewCouponCreator_Form_page.html\">enter new Coupon</a>";
//echo "<button class=\"pure-button pure-button-active\" onclick=\"./NewCouponCreator_Form_page.html\">enter new Coupon</button>";

echo "<br>";
echo "<div>";
echo "<br>";
echo "<a class=\"pure-button pure-button-active\" href=\"./uploadCouponInformation.php\">List Coupon info</a>";
echo "</div>";

echo "<br>";
echo "<div>";
echo "<br>";
echo "<a class=\"pure-button pure-button-active\" href=\"./CouponCreateCSVfile.php\">export Coupon to CSV</a>";
echo "</div>";
//echo "<button class=\"pure-button pure-button-active\">enter new Coupon</button>";

echo "<br>";
echo "<div>";
echo "<br>";
echo "<a class=\"pure-button pure-button-active\" href=\"./CouponCreateXMLfile.php\">export Coupon XML</a>";
echo "</div>";
//echo "<button class=\"pure-button pure-button-active\">enter new Coupon</button>";


?>