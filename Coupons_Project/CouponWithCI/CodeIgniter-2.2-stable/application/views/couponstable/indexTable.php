<?php
//var_dump($this->table);
//var_dump($coupons);

//$this->table->set_caption("list of coupons");
//$this->table->set_heading('name','filename','descirption');
//$this->table->generate($coupons);

$tmpl = array ( 'table_open'  => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">' );

$this->table->set_template($tmpl);

//$this->table->set_heading('id','B.ID','C.ID','name','desciption','file name');
//echo $this->table->generate($coupons);
$this->table->set_caption('<h2 style="color:red">list of coupons</h2>');
$this->table->set_heading('file name','name','desciption','More info');

foreach ($coupons as $line)
{
    $CouponImg='<img src="http://localhost/CodeWithZend/Coupons_Project/upload_Coupons/'.$line['imagefilename'].'"height="180" width="180">';
    $oneCoupond='<a href="http://localhost/CodeWithZend/Coupons_Project/CouponWithCI/CodeIgniter-2.2-stable/index.php/couponspages/getcoupon/'.$line['id'].'">View coupon</a>';
    $this->table->add_row($CouponImg,$line['name'],$line['description'],$oneCoupond);
}

echo $this->table->generate();

var_dump($img);
?>


