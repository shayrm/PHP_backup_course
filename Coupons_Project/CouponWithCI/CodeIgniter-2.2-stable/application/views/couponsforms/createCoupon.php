<?php

//create coupon form
//
echo "<h2>Create a coupon item</h2>";

echo validation_errors();

// form Start
// 
$attributes = array('class' => '', 'id' => '');
echo form_open_multipart ('couponstable/createCoupon', $attributes); 

echo form_fieldset('Coupon Information');
echo "<h2>Please Enter Coupon Information here</h2>\n";

//echo 	"<label for=\"couponName\">Enter coupon name</label>";

//Coupons name Input
echo form_label('Enter coupon name','couponName');

$data = array (
    'name'          =>'couponName',
    'id'            =>'couponName',
    'type'          =>'text',
    'autocomplete'  => 'on',
    'autofocus'     => 'autofocus',
    'placeholder'   => 'Coupon Name',
    'maxlength'     => '20',
    'size'          => '20',
    'style'         => 'width:20%');

echo "<br />".form_input($data);	
echo "<br />";

// coupon Description input
// 	"<label for=\"couponName\">Enter coupon description</label>";
echo "<br />".form_label('Enter coupon description','couponDesc');

$data = array (
    'name'          =>'couponDesc',
    'id'            =>'couponDesc',
    'rows'          => 10,
    'cols'          => 10,
    'style'         => 'width:20%',
    'placeholder'   => 'Coupon description');

echo "<br />".form_textarea($data);
echo "<br />";

//Coupon Description.
//"<label for=\"businessName\"> * Business name: </label>";
echo "<br />".form_label('Business name:','businessName');

$options = array(
    '1'=>'BikeLine',
    '2'  => 'Food Inc',
    '3'    => 'Movie Star',
    '4'   => 'Run Lola',
    '5' => 'Fead Me',
);

echo "<br />".form_dropdown('businessID', $options);
echo "<br />";


//couponCategory
echo "<br />".form_label('Select coupon category:','couponCategory');

$options = array(
    '1'=>'sport',
    '2'  => 'restaurants',
    '3'    => 'entertainments',
    );

echo "<br />".form_dropdown('couponCategory', $options);
echo "<br />";
//end couponCategory
//

// upload file
echo "<br />".form_label('Upload coupon file image:','userfile');
$options = array(
    'name'      =>'userfile',
    'id'        => 'fileCoupon',
    'accept'    => 'image/*',
    'size'      =>  "20",
    );

echo "<br />".form_upload($options);
echo "<br />";
// end - upload file

echo "<br />".form_submit('mysubmit', 'Submit Coupon Info!');

echo form_fieldset_close();
echo form_close();


?>