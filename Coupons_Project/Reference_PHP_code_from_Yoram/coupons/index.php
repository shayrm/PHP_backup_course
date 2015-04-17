<?php

include("classes.php");
//include("classesPDO.php");
//use \zamir;
const CouponsPics = "C:\Users\Yoram\Zend\coupons_pics\\";
const MaxFileSize = 1048576;


$dao = new MySQLCouponsDAO();
$coupon = new Coupon($_POST["couponid"],$_POST["category_id"],$_POST["business_id"],$_POST["couponname"],$_POST["coupondescription"]);

$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
//$filename = CouponsPics."".$_POST["business_id"].".".$_POST["couponid"].".".$extension;
$filename = CouponsPics.$_POST["business_id"].".".$_POST["couponid"].".".$extension;
$coupon -> filepath = $filename;

//echo $filename;



/*
 * Delete Coupon
try 
{
    $dao -> deleteCoupon($coupon);
}
catch(CouponDBException $e)
{
    echo $e->getMessage();
}
*/

/*
 * Get Coupons List
try 
{
    $dao->getCoupons(); 
}
catch (CouponDBException $e)
{
    echo $e->getMessage();
}

//Update the coupon
try 
    {
        $dao -> updateCoupon($coupon);
    }
catch  (CouponDBException $e)
    {
        echo $e->getMessage();
    }   

*/
    
// check if coupon already exists
if ($dao-> checkCouponId($_POST["couponid"]))
{
   echo "<br> Coupon ID ".$coupon -> getCouponid()." already exists <a href='form.html'> here </a>to try again<br>";
}

else 
{      

            if (!empty($_FILES["file"]["name"]))
            {
                if (($_FILES["file"]["type"]) != "image/jpeg" // check the file type
                    or ($_FILES["file"]["size"])> MaxFileSize // check the file size up to 1MB
                    or ($_FILES["file"]["error"])) // check for general error
                {
                    echo "File type or file size is incorrect click <a href='form.html'> here </a>to try again";
                }
                else
                {
                    // Create the coupon
                    try
                    {
                        $dao->createCoupon($coupon);
                    }
                    catch (CouponDBException $e)
                    {
                        echo $e->getMessage();
                    }
                    
                    
                    if(move_uploaded_file($_FILES["file"]["tmp_name"] ,$filename))
                    {
                        echo "<br>The file was successfully uploaded!";
                        chmod("$filename",01777);
                        echo "<br> Please click  <a href='form.html'> here </a> to return to the main page";
                        
                    }
                    else
                    {
                        echo "<br>error with calling move_uploaded_file click <a href='form.html'> here </a>to try again";
                    }
                }
            
             }
             
             else 
             {
                 echo "<br> Please add File or click <a href='form.html'> here </a>to try again";
             }
        }
        
//////////////// create coupon data CSV File /////////////////////////        
/*
  try  
    {
       $dao ->createCouponsCSV();
    }
    catch (CouponDBException $e)
    {
    echo $e->getMessage();
    }     

    ?>
*/    

