<?php
include '../../PhpCourseSession_15_PHP_Patterns/supermarketservice/classes.php';

$dao = SupermarketProductsDAO::getInstance();
try
{
	var_dump($dao->getProducts());
}
catch(SupermarketProductsException $ex)
{
	echo $ex->getMessage();
}
?>