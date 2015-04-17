<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo <<<END
<style>
table,td,caption
{
width:300px;
border:1px solid black;
}
th
{
background-color:red;
}
</style>
END;

function calc_table($limit1,$limit2){
    echo "<br>";
    echo "<table>";
    echo "<th colspan=\"$limit1\";>Table for " .($limit1-1). " x ". ($limit2-1)."</th>";
    
    for ($i=1;$i<$limit1;$i++){
    echo "<tr>";
        for ($r=1;$r<$limit2;$r++){
            //echo "<tr>";
            //echo "<td>".$i."</td>";
            //echo "<td>".$r."</td>";
            echo "<td>".$i." x ".$r."=".$i*$r."</td>";
            //echo "</tr>";
        }
    echo "</tr>";    
    }
    echo "</table>";
}

