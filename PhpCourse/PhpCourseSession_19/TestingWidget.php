<?php
/*
 * We will need to do the following first
 * Get 3 random Coupons from the Coupon Table
 * and present their file in a page
 * 
 * Later we will add this php scrip to WP widget
 */

//get the 3 random ID from the table

/* 
 * the SQL query should be SELECT * FROM coupons ORDER BY RAND() LIMIT 3;
 */
//include Coupons_Project/

class RandomPic
{
    public $tableOption=3; 
    
    function __construct()
    {
        
        include ('../../Coupons_Project/old_files/OldCouponClassAndFiles/Coupon_Function_file.php');

        //Connect to the MySQL DB with the information saved in Coupon_Fun php file
        $mysql_connect=ConnectToDatabase();
    
        //this is the query that ranndmly choose 6 "coupon" images
        $query="SELECT * FROM coupons ORDER BY RAND() LIMIT 7";
            
        if ($stmt = $mysql_connect->prepare("$query")) 
        {
            
            $stmt->execute();
            
            /* bind result variables  and print it to HTML table*/
            $stmt->bind_result($id, $category_id, $business_id, $name, $description, $imagefilename);
            
            echo "<table style=\"width:50%\" border=\"2\">";
            echo "<tr>";
            
            //reset the table raw counter
            $i=0;
                
            while($stmt->fetch())
            {
                //inorder to make a 3 x 2 table we need to define when we should open new <tr>
                $i++;
                if ($i<$this->tableOption+1)
                {
                    
                 //printf("<td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td>",$id, $category_id, $business_id, $name, $description,$imagefilename);
                 //echo "</tr>";
                 echo "<td>";
                 echo "<img src=\"/CodeWithZend/Coupons_Project/upload_Coupons/$imagefilename\" alt=\"$name\" height=\"250\" width=\"250\">";
                 echo "</td>";
                }
               
                else 
                { 
                    // $i is 4 so we need to close the </tr> and open a new one
                    // $i=0 to set 3 more pictures   
                    echo "</tr>";
                    echo "<tr>";
                    $i=0;
                }
             }
               echo "</tr>";
               echo "</table>";
               echo "</iframe>";
            /* close statement */
            $stmt->close();
        }
     }
}
