<?php
//
//interface definition for coupon class
//


//adding Log4PHP to the class for debugin
//debug is not working !!! looks like the Logger is not working (check the path)!!!
$debug_level=TRUE;
      
include '../../../Log4PHP-2.3.0/Logger.php';
Logger::configure('loggingconfiguration.xml');

interface ICouponsDAO {

    function getCoupon($id);
    function addCoupon(Coupon $ob);
    function getCoupons($csv);
    function updateCoupon(Coupon $ob);
    
}

class CouponsPlatformDAO implements ICouponsDAO {
          
    private $log;
    
    var $host="localhost";
    var $user="coupon";
    var $password="LetMeIn!!!";
    var $database="coupon_db";
    
    
    public function __construct()
    {
        //activating the log4PHP configuration 
        //include 'Log4PHP-2.3.0/Logger.php';
        //Logger::configure('loggingconfiguration.xml');
        
        echo "<h3>Debug is on- Log with log4PHP - 1</h3>";
        $this->log = Logger::getLogger(__CLASS__);
        $this->log->info ("Connect to MySQLDB....");
        //$csv=NULL;
        //$this->getCoupons($csv);
    }
    
    function ConnectToDatabase(){
    
        //$host="localhost";
        //$user="coupon";
        //$password="LetMeIn!!!";
        //$database="coupon_db";
        
        
        $this->log->info("Connect to MySQLDB");
        
        $mysqlInet= new mysqli($this->host, $this->user, $this->password, $this->database);
    
        /* check connection */
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
    
        return $mysqlInet;
    }
    
    function runCouponQuery ($query,$id){
    
        //use PURE CSS file
        //echo "<link rel=\"shortcut icon\" href=\"bootstrap-3.0.0/assets/ico/favicon.png\">";
    
        //loading Pure CSS file
        //echo "<link href=\"Coupon_CSS_file_from_Pure-min.css\" rel=\"stylesheet\">";
    
        //connect to the DB
        $mysql_connect=$this->ConnectToDatabase();
    
        if ($stmt = $mysql_connect->prepare("$query")){
            $this->log->info ("running MySQL query: $query");
    
            /* bind parameters for id */
            if (isset($id)){
                $stmt->bind_param("i", $id);
            }
    
                //bind the all coupon information
                //No need to bind the param since we are not using SQL query with SOMETHING=?
                // we run only simple SELECT * query
                //$stmt->bind_param("iiisss", $id,$category_id, $business_id, $name, $description, $imagefilename);
            
               /* execute query */
            $stmt->execute();
    
            /* bind result variables  and print it to HTML table*/
            $stmt->bind_result($id, $category_id, $business_id, $name, $description, $imagefilename);
    
            while($stmt->fetch()){
                
                //($id, $category_id, $business_id, $name, $description,$imagefilename);
                echo "<tr>";
                printf("<td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td>",$id, $category_id, $business_id, $name, $description,$imagefilename);
                
                echo "</tr>";
                //incase there is a need to export the content of the Coupon table to file in CSV format
                if (isset($csv)){
                    
                    fprintf($file,"%s,%s,%s,%s,%s,%s \n",$id, $category_id, $business_id, $name, $description,$imagefilename);
                    //fputcsv($file,$ary);
                }
                echo "</tr>";
            }
            echo "</table>";
    
            /* close statement */
            $stmt->close();
           // fclose($file);
    
        }
        return;
    }
    
    function getCoupon($id) {
        // Incould the functions file to be able to connect to the DB; 
        //include 'Coupon_Function_file.php';
        
        //run mysqli via Connect to Database function.
        $query = "SELECT * FROM coupon_db.coupons where id=?";
        $this->runCouponQuery($query, $id);
        
    }
    
    function getCoupons($csv){
        
        // Incould the functions file to be able to connect to the DB;
        //include 'Coupon_Function_file.php';
        
        //run mysqli via Connect to Database function.
        //run the query to list all coupons information registered in the database
        $query="SELECT * FROM coupon_db.coupons";
        if (isset($csv)){
            $this->runCouponQuery($query,NULL,TRUE);
        }
        //in case there is no need to export to CSV file
        $this->runCouponQuery($query,NULL,NULL);
                  
    }
    
    function addCoupon(Coupon $ob){
        $ob->enterNewCoupon();
    }
    
    function updateCoupon(Coupon $ob){
        $ob->enterNewCoupon();
    }
}