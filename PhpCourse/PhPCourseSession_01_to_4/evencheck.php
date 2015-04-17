<h2> check that the number is even </h2>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//$numA = $_GET ['number'];
$numA = 21;
if($numA%2==0)
{
    echo "<h2>the number value is </h2>".$numA;
    echo "<br>the number".$numA ."is even</br>";
}
else 
    
    {
   echo "<br>the number ".$numA ." is odd</br>";
}

$index=1;
while ($index<10)
{
    echo "<br> our index is equal to $index</br>";
    $index=$index+1;
}

?>
<table border="1">
    <tr>
        <th>county's</th><th> Corruncy</th>
    </tr>
        <td>Israel</td><td> NIS</td>
       
</table>