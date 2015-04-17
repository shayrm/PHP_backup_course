<?php
interface IProductsDAO
{
	function getProducts();
	function getProduct($id);
}

class SupermarketProductsDAO implements IProductsDAO
{
	private static $instance;
	
	private function __construct(){}
	
	public static function getInstance() 
	{
		if(SupermarketProductsDAO::$instance==null)
		{
			SupermarketProductsDAO::$instance = new SupermarketProductsDAO();
		}
		return SupermarketProductsDAO::$instance;
	}
	
	public function getProducts()
	{
		//getting a connection with the database
		$mysqli = new mysqli("127.0.0.1","aaa","bbb","inventory");
		if ($mysqli->connect_errno)
		{
			throw new SupermarketProductsException("failure in connecting the database ... ".$mysqli->connect_error );
		}
		
		//creating the select query
		$query = "SELECT id,name,price FROM products";
	
		//creating the returned array
		$vec = array();
		
		//executing the query
		$result = $mysqli->query($query);
		if ($result->num_rows > 0)
		{
			while(list($id,$name, $price) = $result->fetch_row())
			{
				$productarray = array();
				$productarray['id'] = $id;
				$productarray['name'] = $name;
				$productarray['price'] = $price;
				$vec[$id] = $productarray;
			}
		}
		else
		{
			throw new SupermarketProductsException ("products table is empty");
	
		}	
		$mysqli->close();
		return $vec;
	}
	public function getProduct($id)
	{
		//need to complete the code
		//...
	}
}

class SupermarketProductsException extends Exception
{
	function __construct($str)
	{
		parent::__construct($str);
	}
}
?>
