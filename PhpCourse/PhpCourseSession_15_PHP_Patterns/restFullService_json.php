<?php


//connect to web service to recieve JSON 
// PC IP 172.16.11.85 (in classroom)

//URL should be thhp://172.16.11.85/supermarketservice/service.php


$url="http://localhost/CodeWithZend/PhpCourseSession_15_PHP_Patterns/services.php";
$contents = file_get_contents($url);
$contents = utf8_encode($contents);
$results = json_decode($contents);

echo <<<TABLE
<h2 style=\"color:green\">Price list from Supermarket Rami Cohen</h2>
<table border="1" width="400">

    <thead>
        <tr> <th>ID</th> <th>Product Name</th> <th>Price</th></tr>
    </thead>
TABLE;


foreach ($results as $key=>$val){
    echo "<tr>";
    echo "<td>".$val->id."</td>";
    echo "<td>".$val->name."</td>";
    echo "<td>".$val->price."</td>";
    echo "</tr>";
}
