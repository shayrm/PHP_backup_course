<?php

//namespace zamir\coupons;

class Business
{
            private $id;
            private $name;
            private $city;
            private $street;
            private $StreetNumber;
            private $zip;
            private $telephone;
            private $latitude;
            private $longtitude;
            
            
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function getStreetNumber()
    {
        return $this->StreetNumber;
    }

    public function getZip()
    {
        return $this->zip;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function getLongtitude()
    {
        return $this->longtitude;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function setStreet($street)
    {
        $this->street = $street;
    }

    public function setStreetNumber($StreetNumber)
    {
        $this->StreetNumber = $StreetNumber;
    }

    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    public function setLongtitude($longtitude)
    {
        $this->longtitude = $longtitude;
    }

			function __construct($id_var,$name_var,$city_var,$street_var,$streetnumber_var,$zip_var,$telephone_var,$latitude_var,$longtitude_var)
            {
                $this->id = setId($id_var);
                $this->name = setName($name_var);
                $this->city = setCity($city_var);
                $this->Street = setStreet($street_var);
                $this->StreetNumber = setStreetNumber($streetnumber_var);
                $this->zip = setZip($zip_var);
                $this->telephone = setTelephone($telephone_var);
                $this->latitude = setLatitude($latitude_var);
                $this->longtitude = setLongtitude($longtitude_var);
                //$this ->company_folder = utils->makedir($this->id);
            }
            

}

class Coupon
{
            public $couponid;
            public $category_id;
            public $business_id;
            public $couponname;
            public $coupondescription;
            public $filepath;

            
    public function getCouponid()
    {
        return $this->couponid;
    }

    public function getCategory_id()
    {
        return $this->category_id;
    }

    public function getBusiness_id()
    {
        return $this->business_id;
    }

    public function getCouponname()
    {
        return $this->couponname;
    }

    public function getCoupondescription()
    {
        return $this->coupondescription;
    }

    public function getFilepath()
    {
        return $this->filepath;
    }

    public function setCouponid($couponid)
    {
        $this->couponid = $couponid;
    }

    public function setCategory_id($category_id)
    {
        $this->category_id = $category_id;
    }

    public function setBusiness_id($business_id)
    {
        $this->business_id = $business_id;
    }

    public function setCouponname($couponname)
    {
        $this->couponname = $couponname;
    }


    public function setCoupondescription($coupondescription)
    {
        $this->coupondescription = $coupondescription;
    }


    public function setFilepath($filepath)
    {
        $this->filepath = $filepath;
    }

	public function __construct($couponid_var,$category_id_var,$business_id_var,$couponname_var,$coupondescription_var)
         {
            $this-> setCouponid($couponid_var);
            $this-> setCategory_id($category_id_var);
            $this-> setBusiness_id($business_id_var);
            $this-> setcouponname($couponname_var);
            $this-> setCoupondescription($coupondescription_var);

         }

          function __toString()
         {
                 return "coupon id: ".$this->couponid."<br>"."Coupon Name: ".$this->couponname."<br>".
                 "Coupon Description: ".$this->coupondescription."<br>"."category_id: ".$this->category_id."<br>".
                 "business_id: ".$this->business_id."<br>"."filepath".$this->filepath;
         }


}

class Utils  
{
    

    static function makedir($dir_val)
    {
    $dir= $dir_val;
    $folder = getcwd();
    $newDir = $folder."\\".$dir;
    mkdir($newDir, 0777, true);
    
    return $newDir;

    }
}

interface ICouponsDAO
{
    public function getCoupon($id);
    public function deleteCoupon(Coupon $coupon);
    public function getCoupons();
    public function updateCoupon(Coupon $coupon);
    public function createCoupon (coupon $coupon);

}

//Data access object
class MySQLCouponsDAO implements ICouponsDAO
{
    public function getCoupon($id)
    {
    //$mysqli = new mysqli("localhost", "user", "password", "database");
    $mysqli = new mysqli("127.0.0.1","coupon","coupon","coupon");
    if ($mysqli->connect_errno)
    {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
        //creating the query itself... it is a simple sql statment... simple string
        //$query = "SELECT coupon_id,coupon_name FROM coupons WHERE coupon_id = $id";
        $query = "select v.coupon_id,v.coupon_name , v.category_name,v.category_description, v.business_name from coupon_detailes_v v where v.coupon_id = $id";
        //performing the sql query
        $result = $mysqli->query($query);
        if ($result->num_rows > 0)
        {        
            //iterating the rows the result includes
            while(list($coupon_id,$coupon_name, $category_name, $category_description, $business_name) = $result->fetch_row())
            {
                //printf("%s,%s<br>",$name,$id);
                echo "<br>"."Coupon ID = ".$coupon_id."<br>"."Coupon Name = ".$coupon_name.
                "<br>"."Category Name = ".$category_name."<br>"."Category Description = ".$category_description.
                "<br>"."Business Name = ".$business_name;
            }
        }
        else
        {
            throw new CouponDBException ("Qyery returns no rows");
            
        }
            
        
        //releasing the resources our connection to the database was using
        $mysqli->close();
    }

    public function deleteCoupon(Coupon $coupon)
    {
        $mysqli = new mysqli("127.0.0.1","coupon","coupon","coupon");
        if ($mysqli->connect_errno)
        {
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        
        $id = $coupon -> getCouponid();
        $query = "DELETE FROM `coupons` WHERE `coupon_id` = $id";
        
        $result = $mysqli->query($query);
        if ($result === TRUE)
        {
           echo "<br> Coupon ID: ".$id." Deleted Successfuly";
        }
        else
        {
            throw new CouponDBException ("Deleting coupon $id failed");
        
        }
        
        $mysqli->close();
        }
        

    public function getCoupons()
{
    //$mysqli = new mysqli("localhost", "user", "password", "database");
    $mysqli = new mysqli("127.0.0.1","coupon","coupon","coupon");
    if ($mysqli->connect_errno)
    {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
        $query = "SELECT coupon_id,coupon_name, coupon_description FROM coupons";
        
        $result = $mysqli->query($query);
        if ($result->num_rows > 0)
        {        
            while(list($coupon_id,$coupon_name, $coupon_description) = $result->fetch_row())
            {
                //printf("%s,%s<br>",$name,$id);
                echo "<br>"."Coupon ID = ".$coupon_id."<br>"."Coupon Name = ".$coupon_name."<br>"."Coupon Description = ".$coupon_description;
            }
        }
        else
        {
            throw new CouponDBException ("Query returns no rows");
            
        }
            
        $mysqli->close();
    }
    
    

    public function createCouponsCSV()
    {
        //$mysqli = new mysqli("localhost", "user", "password", "database");
        $mysqli = new mysqli("127.0.0.1","coupon","coupon","coupon");
        if ($mysqli->connect_errno)
        {
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
       
                $query = "SELECT 'coupon_id','coupon_name', 'coupon_description' FROM dual union all SELECT coupon_id,coupon_name, coupon_description FROM coupons";
        $result = $mysqli->query($query);
        
        $i=$result->num_rows;
        //print_r ($result);
        for ($j=0; $j<$i; $j++)
        {
            $vec[$j]= $result->fetch_row();
        }
        
        $file_handle = fopen('coupons_data.csv','w+');
        
        foreach($vec as $row)
        {
            fputcsv($file_handle,$row);
        }
        
        fclose($file_handle);
        
        echo('The data.csv file was created');
        
        $mysqli->close();
    }
        
        /*
        $query = "SELECT coupon_id,coupon_name, coupon_description FROM coupons";
    
        $result = $mysqli->query($query);
        if ($result->num_rows > 0)
        {
            $file_handle = fopen('coupons_data.csv','w+');
            while(list($coupon_id,$coupon_name, $coupon_description) = $result->fetch_row())
            {
                //printf("%s,%s<br>",$name,$id);
                fputcsv($file_handle,$result);
            }
            fclose($file_handle);  
            echo('The coupons_data.csv file was created');
        }
        else
        {
            throw new CouponDBException ("Qyery returns no Coupons");
    
        }
    
        $mysqli->close();
        
        */
    

        
        public function updateCoupon(Coupon $coupon)
    
        {
        $mysqli = new mysqli("127.0.0.1","coupon","coupon","coupon");
        if ($mysqli->connect_errno)
            {
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }
        $id = $coupon -> getCouponid();
        $Category = $coupon -> getCategory_id();
        $Bussiness = $coupon -> getBusiness_id();
        $Name = $coupon -> getCouponname() ;
        $Desc = $coupon -> getCoupondescription();
        $File = $coupon -> getFilepath();
      
     
        $query = "UPDATE `coupon`.`coupons` SET `coupon_name` = '$Name', `coupon_description` = '$Desc' WHERE `coupons`.`coupon_id` = $id;";
    
        $result = $mysqli->query($query);
        if ($result === TRUE)
        {
            echo "<br> Coupon ID: ".$id." Updated Successfuly";
        }
        else
        {
            throw new CouponDBException ("Updating coupon $id failed");
        
        }
    
    $mysqli->close();
    
    }
    
    public function createCoupon(Coupon $coupon)
    {
    $mysqli = new mysqli("127.0.0.1","coupon","coupon","coupon");
    if ($mysqli->connect_errno)
    {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $id = $coupon -> getCouponid();
    $Category = $coupon -> getCategory_id();
    $Bussiness = $coupon -> getBusiness_id();
    $Name = $coupon -> getCouponname() ;
    $Desc = $coupon -> getCoupondescription();
    $File = $coupon -> getFilepath();
      
     
     $query = "INSERT INTO `coupon`.`coupons` (`coupon_id`, `category_id`, `business_id`, `coupon_name`, `coupon_description`, `file`) VALUES ($id, $Category, $Bussiness ,'$Name' ,'$Desc', '$File');";
    
    $result = $mysqli->query($query);
    if ($result === TRUE)
    {
        echo "<br> Coupon ID: ".$id." Created Successfuly";
    }
    else
    {
        throw new CouponDBException ("Creating coupon $id failed");
    
    }
    
    $mysqli->close();
    }
    
    
    
    public function checkCouponId($id)
    {
        $mysqli = new mysqli("127.0.0.1","coupon","coupon","coupon");
        if ($mysqli->connect_errno)
        {
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        
        $query = "SELECT coupon_id FROM coupons WHERE coupon_id = $id";
    
        $result = $mysqli->query("SELECT coupon_id FROM coupons WHERE coupon_id = $id");
        if ($result->num_rows > 0)
        {
            return 1;
        }
        
        $mysqli->close();
    }
    
    
}

class CouponDBException extends Exception
{
    function __construct($str)
    {
        parent::__construct($str);
    }
}



?>