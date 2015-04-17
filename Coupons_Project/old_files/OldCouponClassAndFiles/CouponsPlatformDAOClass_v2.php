<?php

/* This file impliment interface to the mySQL DB
 * 
 *It will resolve the coupons from the DB with the following functions 
 * getCoupon($id)
 * addCoupon(Coupon $ob)
 * getCoupons()
 * updateCoupon(Coupon $ob)
 * 
 * interface definition for coupon class
//

 */

interface ICouponsDAO {
    
    function getCoupon($id);
    function addCoupon(Coupon $ob);
    function getCoupons($csv);
    function updateCoupon(Coupon $ob);
}


class CouponsPlatformDAO implements ICouponsDAO {
    
    private $host="localhost";
    private  $user="coupon";
    private  $password="LetMeIn!!!";
    private $database="coupon_db";

    
    // function that open a stream to the mySQL DB
    // use the mysqli class
    function ConnectToDatabaseMySQLi(){
    
        //connect to the DB with the relevant information
        $mysqlInet= new mysqli(
            $this->host, 
            $this->user, 
            $this->password, 
            $this->database);
    
        /* check connection */
        
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
    
        return $mysqlInet;
    }
      
    function runCouponQuery ($query){
        
        //use PURE favicon file
        echo "<link rel=\"shortcut icon\" href=\"bootstrap-3.0.0/assets/ico/favicon.png\">";
        
        //loading Pure CSS file
        echo "<link href=\"Coupon_CSS_file_from_Pure-min.css\" rel=\"stylesheet\">";
        
        $mySQLConnection=$this->ConnectToDatabaseMySQLi();
        
        if ($stmt = $mySQLConnection->prepare("$query")){

            /* If we plan to search based on specific ID
             * we bind parameters for ID only! */
            if (isset($id)){
                $stmt->bind_param("i", $id);
            }
            
            /* execute query */
            $stmt->execute();
            
            /* bind result variables  and print it to HTML table*/
            $stmt->bind_result($id, $category_id, $business_id, $name, $description, $imagefilename);
            
            echo <<<END
            <div class="pure-menu pure-menu-open pure-menu-horizontal">
            <a href="#" class="pure-menu-heading">Coupon Admin</a>
            
            <ul>
                <li class="pure-menu-selected"><a href="./NewCouponCreator_Form_page.html">New Coupon</a></li>
                <li><a href="./NewBusinessCreator_Form_page.html">New Business</a></li>
                <li><a href="./NewCategoryCreator_Form_page.html">New Category</a></li>
                </ul>
            </div>
END;
            
            echo "<br>";
            echo "<hr>";
            echo <<<END
                 <div class="pure-g">
                    <div class="pure-u-2-5"><h2>Copun list:</h2></div>
                    <div class="pure-u-2-5"><h3>The content of the Coupon table</h3></div>
                 </div>
END;
            echo "<table class=\"pure-table pure-table-horizontal\">";
            echo "<thead><tr>";
            echo "<th>ID</th><th>Cat_id</th><th>Bus_id</th><th>coupon name</th><th>description</th><th>imagefilename</th>";
            echo "</tr></thead>";
            
            /* fetch value */
            while($stmt->fetch()){
                //echo "<br>";
                echo "<tr>";
                printf("<td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td>",$id, $category_id, $business_id, $name, $description,$imagefilename);
            
                echo "</tr>";
            }
            
            echo "</table>";
            
            /* close statement */
            $stmt->close();
            // fclose($file);
            
            }
            return;
            
        }
    }
    
    //returen the information of the coupon based on it's ID
    function getCoupon($id){
        // Incould the functions file to be able to connect to the DB;
        //include 'Coupon_Function_file.php';
        
        //run mysqli via Connect to Database function.
        $query = "SELECT * FROM coupon_db.coupons where id=?";
        $this->runCouponQuery($query, $id);
        
        }
    
    }
    
    //add coupon to the DB
    function addCoupon(Coupon $ob){
    
    }
    
    //print put the coupons to a file with CSV format
    function getCoupons($csv){
    
    }
    
    //update the information of a specific coupon
    function updateCoupon(Coupon $ob){
    
    }
    
    
}
  ?>