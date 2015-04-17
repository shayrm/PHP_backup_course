<?php

/*
 * definitions for the Business and coupon class
 */

class Category {
    
    private $name;
    private $id;
	
    
    
	public function __construct($id,$name){
	    $this->setId($id);
	    $this->setName($name);
	    
	}
	
	function CategoryRecordsOutput (){
	    include '../../OldCouponClassAndFiles/CouponMySQLConnection.php';
	    $query="SELECT categoryID,categoryName FROM categories;";
	    $result = $mysqli->query($query);
	    return $result;
	}
	
	function getCategoryID ($name){
	    include '../../OldCouponClassAndFiles/CouponMySQLConnection.php';
	    $query="select categoryID from categories where categoryName = \'$name\'";
	    $resultID = $mysqli->query($query);
	    return $resultID;
	}
	
	/**
     * @return the $name
     */
    public function getName()
    {
        return $this->name;
    }

	/**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }
    
    
	/**
     * @param field_type $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

	/**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    
    
}

