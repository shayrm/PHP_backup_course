<html>
<head>
<meta charset="ISO-8859-1">
<title>Coupons</title>
</head>
<body>

<?php

 $mysqli = new mysqli("127.0.0.1","coupon","coupon","coupon");
    if ($mysqli->connect_errno)
{
echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$get = $mysqli->query ("SELECT business_id,business_name FROM businesses");

$option = '';

while($row = mysqli_fetch_assoc($get))
{
    $option .= '<option value = "'.$row['business_id'].'">'.$row['business_name'].'</option>';
}

////////////////////////////////////////////////////////////////////////////

$get = $mysqli->query ("SELECT category_id, category_name FROM categories");

$cat_option = '';

while($row = mysqli_fetch_assoc($get))
{
    $cat_option .= '<option value = "'.$row['category_id'].'">'.$row['category_name'].'</option>';
}

?>

<h1> Create Coupon - Admin Panel </h1> <br>
<FORM enctype="multipart/form-data" ACTION="index.php" METHOD="Post" id="coupon_form">

    business id:
    <select name="business_id" form="coupon_form">

        <?php echo $option; ?>

    </select>

    <br>

    category id:
    <select name="category_id" form="coupon_form">
      
      <?php echo $cat_option; ?>
      
    </select>
    <br>

    Coupon id :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <INPUT TYPE=TEXT NAME="couponid">
    <br>

Coupon Name :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <INPUT TYPE=TEXT NAME="couponname">
    <br>

   Coupon Description:
    <textarea rows="3" TYPE=TEXT NAME="coupondescription">  </textarea>
    <br>


    <label for="file">Picture  (Max 1MB):</label>
    <input type="hidden" name="MAX_FILE_SIZE" value="1048576"/>
    <input type="file" name="file" id="file"><br><br>
    <input type="submit" name="submit" value="Submit">

</FORM>

</body>
</html>