<?php

/*
 * build REStful web service for coupon with Slim Web service framework
 */
//namespace Com\ShayMCoupon\Samples;
include 'CouponClassCoupon.php';
include 'DBloginInfo.php';
include 'rb.php';


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
        
        var $redbeanHost='mysql:host=localhost';
        var $redbeanConnect="mysql:host=localhost;dbname=coupon_db','coupon','LetMeIn!!!";
        
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
              
        public function getCoupon($id)
        {
          
            //Conect to DB with Redbean FW
            //test if there is no active R - Redbean connection
            $ob=new DBinfo();
            if (!(R::testConnection()))
            {
            R::setup("mysql:host={$ob->host};dbname={$ob->database}",$ob->user,$ob->password);
            R::debug(true);
            }
            
            //find in coupon table the row that match to ID
            $getCouponID=R::find('coupons','id='.$id);
            
            return $getCouponID;
          
          /*
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
          */
        }
        
        public function getAllCoupons()
        {
            $ob=new DBinfo();
            
            //test if there is no active R - Redbean connection
            if (!(R::testConnection()))
            {
            //"mysql:host=localhost;dbname=coupon_db','coupon','LetMeIn!!!";
            R::setup("mysql:host={$ob->host};dbname={$ob->database}",$ob->user,$ob->password);
            R::debug(true);       
            }
            //R::setup('mysql:host=localhost;dbname=coupon_db','coupon','LetMeIn!!!');
            $couponArray= R::getall($this->queryAll);
            
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