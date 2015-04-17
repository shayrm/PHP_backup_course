<?php
$file_handle = fopen('data.csv','r');

echo('<table>');

while($values = fgetcsv($file_handle))
{
	echo('<tr>');
	foreach($values as $value)
	{
		echo('<td>'.$value.'</td>');
	}
	echo('</tr>');
}

fclose($file_handle);

echo('</table>');
?>