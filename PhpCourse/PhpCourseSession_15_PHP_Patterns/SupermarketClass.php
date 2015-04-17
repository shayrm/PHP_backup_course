<?php
interface IProductsDAO
{
    function getProducts();
    function getProduct($id);
}


class SupermarketsProductsDAO implements IProductsDAO {
    
    private static $instance;
    
    private function __construct(){}
        
   public static function getInstence(){
       if(SupermarketsProductsDAO::$instance==null){
           SupermarketsProductsDAO::$instance= new SupermarketsProductsDAO();
       }
       return SupermarketsProductsDAO::$instance;
   }
    
    public function getProducts(){
        
        $host="localhost";
        $user="rami";
        $password="1234";
        $database="ramicohen";
        
        $mysqlInet= new mysqli($host, $user, $password, $database);
        
        //handling connection error
        if ($mysqlInet->connect_errno)
        {
            $error=$mysqlInet->connect_errno;
            $error2=$mysqlInet->connect_error."..Connection problem to the database";
            throw new SupermarketProductsException($error);
            throw new SupermarketProductsException($error2);
        }
        
        //creating the select query
        //fix this method to use "prefered"
        $query = "SELECT id,name,price FROM products";
        
        //creating the returned array
        $vec = array();
        
        //executing the query
        $result = $mysqlInet->query($query);
        
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
        $mysqlInet->close();
        return $vec;
        
    }
    public function getProduct($id){
        
    }
}


//class to define the exception
class SupermarketProductsException extends Exception
{
    function __construct($str){
        parent::__construct($str);
    }
}