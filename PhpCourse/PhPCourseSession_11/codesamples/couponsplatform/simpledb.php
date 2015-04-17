<?php
//getting an object that represents a connection to database
$mysqli = new mysqli("127.0.0.1","couponsplatform","michael","couponsplatform");

//creating the query itself... it is a simple sql statment... simple string
$query = "SELECT id,title FROM coupons ORDER BY id";

//performing the sql query
$result = $mysqli->query($query,MYSQLI_STORE_RESULT);

//iterating the rows the result includes
while(list($id,$name) = $result->fetch_row())
{
	//printf("%s,%s<br>",$name,$id);
	echo "<br>$id, $name";
}

//releasing the resources our connection to the database was using
$mysqli->close();
?>