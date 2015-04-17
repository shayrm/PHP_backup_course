<?php

//check the last MySQL error



function ConnectToDatabase(){
    
$host="localhost";
$user="coupon";
$password="LetMeIn!!!";
$database="coupon_db";

$mysqlInet= new mysqli($host, $user, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

return $mysqlInet;
}

//
//run SELECT command to output Coupons information from the DB.
// The funtion will recieve the Query as input

function runCouponQuery ($query,$id){
    
    //use PURE CSS file
    echo "<link rel=\"shortcut icon\" href=\"bootstrap-3.0.0/assets/ico/favicon.png\">";
    
    //loading Pure CSS file
    echo "<link href=\"Coupon_CSS_file_from_Pure-min.css\" rel=\"stylesheet\">";
    
    //connect to the DB
    $mysql_connect=ConnectToDatabase();
    
    if ($stmt = $mysql_connect->prepare("$query")){

        /* bind parameters for id */
        if (isset($id)){
           $stmt->bind_param("i", $id);
        }
        
        else {
        //bind the all coupon information
        //No need to bind the param since we are not using SQL query with SOMETHING=?
        // we run only simple SELECT * query    
        //$stmt->bind_param("iiisss", $id,$category_id, $business_id, $name, $description, $imagefilename);
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

    }
    return;
}