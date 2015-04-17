<?php

/*
 * This file is called by the HTML form file named:
 * NewBusinessCreator_Form_page.html
 * 
 * The information will be collected by business class and will be uploaded to the SQL DB.
 * 
 */
 
include '../../OldCouponClassAndFiles/CouponClassCategory.php';
include '../../OldCouponClassAndFiles/CouponMySQLConnection.php';

$businessName       =$_POST['businessName'];
$businessStreetNo   =$_POST['businessStreetNo'];
$businessStreet     =$_POST['businessStreet'];
$businessCity       =$_POST['businessCity'];
$businessZipCode    =$_POST['businessZipCode'];
$businessTelephone  =$_POST['businessTelephone'];
$businessLatitude   =$_POST['businessLatitude'];
$businessLongtitude =$_POST['businessLongtitude'];
var_dump ($_POST);

echo "<h3>Bussiness information:</h3>";
echo "<hr>";

echo "The business Name is: ". $_POST['businessName']."<br>";
echo "The business Address is:<br>";
echo "".$_POST['businessStreetNo']." ".$_POST['businessStreet']." St, ".$_POST['businessCity'] ."<br>";
echo "Zip Code: ".$_POST['businessZipCode']."<br>";
echo "Telephone Number: ".$_POST['businessTelephone']."<br>";


/*$businessInfo = new Business($businessName, 
                             $businessStreet, 
                             $businessStreetNo, 
                             $businessCity, 
                             $businessZipCode, 
                             $businessTelephone, 
                             $businessLatitude, 
                             $businessLongtitude);
*/

//Insert the info into the coupun_db.business Table:
// node "id" colum is index and with AUTO_INCRIMENT option
// the "id" filed will be incriment on each new line.

$query="INSERT INTO coupon_db.business (name,street,number,city,zip,telephone,latitude,longtitude) VALUES (\"$businessName\",\"$businessStreet\",$businessStreetNo,\"$businessCity\",$businessZipCode,$businessTelephone,$businessLatitude,$businessLongtitude)";
$mysqli->query($query);
                
//check for errors

if ($mysqli->error){
    echo "<h3 style=\"color:red\">uops! Something went wrond!.</h3><br> There is an MySQL error for your last command:<br>". $mysqli->error;
}

//Good, no errors found with the MySQL command.
else {
    echo "<h2>New business was successfuly added to the coupon Database</h2>";
    echo "<hr>";
    
    $query="SELECT id,name,street,number,city,telephone FROM business;";
    //$tableOutput=$mysqli->query($query);
    
    if ($result = $mysqli->query($query)) {
    
        echo "<table border=\"1\">";
        echo "<thead style=\"background-color:yellow;align:center;\">";
        echo "<tr><td>ID</td><td>name</td><td>street</td><td>number</td><td>city</td><td>telephone</td></tr>";
        echo "</thead>";
        /* fetch object array */
        while ($row = $result->fetch_row()) {
            
            //echo "<th>Business info</th>";
            echo "<tr>";
            printf ("<td>%s</td>,<td>(%s)</td>,<td>%s</td>,<td>%s</td>,<td>%s</td>,<td>%s</td>",$row[0], $row[1], $row[2],$row[3],$row[4],$row[5]);
            echo "</tr>";
            
         }
         echo "</table>";
        /* free result set */
        $result->close();
    }
    //foreach ($tableOutput as $row)
    //{
    //    printf("%s,%s<br>",$row['id']);
    //} 
    //var_dump($tableOutput);
}            

echo "<a href=\"./NewBusinessCreator_Form_page.html\">enter new business</a>";
  