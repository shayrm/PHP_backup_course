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

$categoryName       =$_POST['categoryName'];

var_dump ($_POST);

echo "<h3>Category information:</h3>";
echo "<hr>";

echo "The Category Name is: ". $_POST['categoryName']."<br>";


//Insert the info into the coupun_db.business Table:
// node "id" colum is index and with AUTO_INCRIMENT option
// the "id" filed will be incriment on each new line.

$query="INSERT INTO coupon_db.categories (categoryName) VALUES (\"$categoryName\")";
$mysqli->query($query);
                
//check for errors

if ($mysqli->error){
    echo "<h3 style=\"color:red\">uops! Something went wrond!.</h3><br> There is an MySQL error for your last command:<br>". $mysqli->error;
}

//Good, no errors found with the MySQL command.
else {
    echo "<h2>New category was successfuly added to the coupon Database</h2>";
    echo "<hr>";
    
    $query="SELECT categoryID,categoryName FROM categories;";
    //$tableOutput=$mysqli->query($query);
    
    if ($result = $mysqli->query($query)) {
    
        echo "<table border=\"1\">";
        echo "<thead style=\"background-color:yellow;align:center;\">";
        echo "<tr><td>ID</td><td>name</td>";
        echo "</thead>";
        
        /* fetch object array */
        $i=0;
        while ($row = $result->fetch_row()) {
            
            //echo "<th>Business info</th>";
            echo "<tr>";
            printf ("<td>%s</td>,<td>(%s)</td>",$row[0], $row[1]);
            $categoryIDArry[$i]=$row[0];
            $categoryNameArry[$i]=$row[1];
            echo "</tr>";
            $i++;
                                   
         }
         echo "</table>";
        /* free result set */
        $result->close();
    }
    
    //echo the name of each category and it related ID
    echo "<br>test get category ID";
    $categoryList=new Category($categoryIDArry,$categoryNameArry);
    
    for ($i=0;$i<count($categoryIDArry);$i++){
           
        echo "<br>category named: <b>".$categoryNameArry[$i]."</b>as ID number ".$categoryList->getCategoryID($categoryNameArry[$i]);
        
    }
    
    
    //foreach ($tableOutput as $row)
    //{
    //    printf("%s,%s<br>",$row['id']);
    //} 
    //var_dump($tableOutput);
}



echo "<hr>";
echo "<br><a href=\"./NewCategoryCreator_Form_page.html\">Back to enter a new category</a>";
  