<?php

/*
 * build REStful web service for coupon with Slim Web service framework
 */
//namespace Com\ShayMCoupon\Samples;
include 'CouponClassCoupon.php';

interface ICouponsDAO {

    function getCoupon($id);
    function getAllCoupons();
    
    function addCoupon(\Coupon $ob);
    function updateCoupon(\Coupon $ob);

}

class CouponsPlatformDAO implements ICouponsDAO {
    
        var $host="localhost";
        var $user="coupon";
        var $password="LetMeIn!!!";
        var $database="coupon_db";
        var $queryID="SELECT * FROM coupon_db.coupons where id=?";
        var $queryAll="SELECT * FROM coupon_db.coupons";
        
        var $queryAdd="INSERT INTO coupon_db.coupons (category_id,business_id,name,description,imagefilename) VALUES (?,?,?,?,?)";

        public function __construct()
        {
            // add later
        }
        
        public function __toString()
        {
            //add later
        }
        
        
        function ConnectToDatabase()
        {
            $mysqlInet= new mysqli($this->host, $this->user, $this->password, $this->database);
            
            /* check connection */
            if (mysqli_connect_errno()) {
                printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
            }
            
            return $mysqlInet;
        }
        
        public function getCoupon($id)
        {
          //run quesry based on ID
          $mysql_connect=$this->ConnectToDatabase();
          if ($stmt = $mysql_connect->prepare("$this->queryID"))
          {
              $stmt->bind_param("i", $id);
              $stmt->execute();
              $stmt->bind_result($id, $category_id, $business_id, $name, $description, $imagefilename);
              
              
              //$response["workouts"] = array();
              while($stmt->fetch())
              {
                  $result=new \Coupon($id, $category_id, $business_id, $name, $description, $imagefilename);
                                }
          }
          else 
          {
              //returen error
              $mysql_connect->error."[$this->queryID]";
          }
          return $result;
        }
        
        public function getAllCoupons()
        {
            //run generic request that reqru * FROM DB
            $mysql_connect=$this->ConnectToDatabase();
            if ($stmt = $mysql_connect->prepare("$this->queryAll"))
            {    
                       
                $stmt->execute();
                $stmt->bind_result($id, $category_id, $business_id, $name, $description, $imagefilename);
                
                //Array to include all the coupon objects
                $couponArray= array ();
                $i=0;
                
                while($stmt->fetch())
                {
                 $couponArray[$i]= new Coupon($id, $category_id, $business_id, $name, $description, $imagefilename);
                 $i++;   
                }
            }
            else
            {
                //returen error
                $mysql_connect->error."[$this->queryID]";
            }
            return $couponArray;
        }
        
        public function addCoupon (\Coupon $ob){
            //function that add new coupon to the DB
            $ob->enterNewCoupon();            
            
        }
        
        public function updateCoupon(\Coupon $ob)
        {
            //update the coupon info
            
        }

        function runCouponQuery ($query)
        {
            $mysql_connect=$this->ConnectToDatabase();
            
        }
}        