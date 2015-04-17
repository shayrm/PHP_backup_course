<?php
$file_handle = fopen('data.csv','w+');

$vec = array(
	array(42342,"Blue Table",2434.5),
	array(54234,"Red Chair",343.2),
	array(23342,"Tall Chair",532.2)
);

foreach($vec as $row)
{
	fputcsv($file_handle,$row);
}

fclose($file_handle);

echo('The data.csv file was created');
?>