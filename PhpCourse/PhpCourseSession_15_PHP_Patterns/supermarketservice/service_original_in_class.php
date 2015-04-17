<?php
include '../../PhpCourseSession_15_PHP_Patterns/supermarketservice/classes.php';

$dao = SupermarketProductsDAO::getInstance();

if(isset($_GET['id']))
{
	//returning JSON that describes a specific coupon
	
	
	
	
}
else
{
	//returning JSON that describes all coupons
	try
	{
		echo json_encode($dao->getProducts());
	}
	catch(SupermarketProductsException $e)
	{
		$vec = array();
		$vec['exception'] = $e->getMessage();
		echo json_encode($vec);
	}
	
	
	
	
}