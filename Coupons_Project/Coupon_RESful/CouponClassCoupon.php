<?php

class Coupon {

    //atributes definitions for Coupon class
    // when I tried to define the class atributes as privet I got access problems
    
    public $id;
    public $category_id;
    public $business_id;
    public $name;
    public  $description;
    public  $imagefilename;
    

    function __construct($id,$category_id,$business_id,$name,$description,$imagefilename)
    {
        $this->setId($id);
        $this->setCategory_id($category_id);
        $this->setBusiness_id($business_id);
        $this->setName($name);
        $this->setDescription($description);
        $this->setImagefilename($imagefilename);
        
        //connect to the database using the MySQL Connection function 
           
    }
    
    function enterNewCoupon (){
        
        //connect to the database using the MySQL Connection function
        include 'Coupon_Function_file.php';
        
        $path=pathinfo("./",PATHINFO_DIRNAME);
        $mysqlIn=ConnectToDatabase();
        $query="INSERT INTO coupon_db.coupons (category_id,business_id,name,description,imagefilename) VALUES (?,?,?,?,?)";
        
        if ($stmt = $mysqlIn->prepare("$query")){
        
            /* bind parameters for id */
            $cat_id=$this->getCategory_id();
            $bus_id=$this->getBusiness_id();
            $name=$this->getName();
            $desc=$this->getDescription();
            $fileName=$this->getImagefilename();
            
            $stmt->bind_param("iisss",$cat_id,$bus_id,$name,$desc,$fileName);
        
            /* execute query */
            $stmt->execute();
        
            /* close statement */
            $stmt->close();
            echo "<br>New coupon was successfuly added";
            return; 
        }
        
        else{
            echo "<br> There was an error to run the SQL command:<br>$query";
            
            //$errorText=$stmt->error;
            
            printf("<br> DB error code No = %d\n", $stmt->errno);
            printf("Errormessage: %s\n", $stmt->error);
            //echo "<br> DB error message: $errorText";
            return;
        } 
    }

   
    /**
     * @return the $category_id
     */
    public function getCategory_id()
    {
        return $this->category_id;
    }

    /**
     * @return the $business_id
     */
    public function getBusiness_id()
    {
        return $this->business_id;
    }

    /**
     * @return the $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return the $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return the $imagefilename
     */
    public function getImagefilename()
    {
        return $this->imagefilename;
    }

    
    /**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
    /**
     * @param field_type $category_id
     */
    public function setCategory_id($category_id)
    {
        $this->category_id = $category_id;
    }

    /**
     * @param field_type $business_id
     */
    public function setBusiness_id($business_id)
    {
        $this->business_id = $business_id;
    }

    /**
     * @param field_type $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param field_type $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param field_type $imagefilename
     */
    public function setImagefilename($imagefilename)
    {
        $this->imagefilename = $imagefilename;
    }

     
}