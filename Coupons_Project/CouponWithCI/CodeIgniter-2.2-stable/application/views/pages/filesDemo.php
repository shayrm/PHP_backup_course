<?php
echo "<h2>the list of files in the current directory</h2>";
$data=get_filenames('C:/Users/eoismes/Music/Serj_Tankian-Elect_The_Dead-2007-SERJTANKiAN/', TRUE);

//var_dump($data);
echo "the files listed are:<br>";

foreach ($data as $line=>$key)
{
    echo "<br>$key";
}

echo "<br /><br />";
echo '<a href="home">Home</a>';
?>