<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "<div id=\"heading\" style=\"width:500px;background-color:red;text-align:center;\"><br>";
echo "<h2 style=\"color:Yellow\">Assignment of PHP course #8 Session number-4  16/07/14</h2>";
echo "<hr>";
echo "<p></p></div>";
//
//Countries Sales Reports Matrix 
//
//================================================================================
//
echo "<div id=\"prog\" style=\"background-color:#CCFFFF;width:900px;height:40%\">";
echo "<h3 style=\"color:blue;text-align:center\">Develop a PHP script that prints Countries Sales Reports Matrix</h3>";
echo "===============================================================================================";
echo "<p></p>";

$Report = array (
    "Ducks Hunting" => 
                   array ("France"=>23,"Germany"=>53,"Israel"=>2,"Canada"=>34,"Turkey"=>12),
    "Bugz Busters"=>
                array ("France"=>12,"Germany"=>23,"Israel"=>1,"Canada"=>54,"Turkey"=>22),
    "Coastal Force"=>
                array ("France"=>3,"Germany"=>4,"Israel"=>9,"Canada"=>11,"Turkey"=>4),
    "Omega Mission"=>
                array ("France"=>5,"Germany"=>3,"Israel"=>6,"Canada"=>2,"Turkey"=>2),
    
        );

//var_dump($Report);

$Keys_Game =  array_keys($Report);
$Keys_country =  array_keys($Report['Ducks Hunting']);

echo "<table border=1>";
    
    $lG = count($Keys_Game); //the number of Games
    $lC= count($Keys_country); //the number of countries
    $Total_game=0;
    $Total_Country=0;
    
    echo "<tr><th></th>";  
    
        for ($i=0;$i<$lC;$i++){
            echo "<th style=\"width:90px;background-color:green;\">$Keys_country[$i]</th>";
      }
      echo "<th style=\"width:90px;background-color:gray;\">Game-Total</th>";
    echo "</tr>";  
    
    for ($r=0;$r<$lG;$r++){
        echo "<tr><th style=\"width:150px;background-color:yellow;\">$Keys_Game[$r]</th>";
        
        for ($i=0;$i<$lC;$i++){
            
        echo "<td style=\"text-align:center\">".$Report [$Keys_Game[$r]][$Keys_country[$i]]."</td>";
        
        // Sum the total based on Game
        $Total_game += $Report [$Keys_Game[$r]][$Keys_country[$i]];
        }
        echo "<td style=\"text-align:center\">$Total_game</td>";
        $Total_game=0;
        echo "</tr>";
        
    }
echo "</table>";
echo "<br>";
echo "</div>";
//============================================================================

//
//Develop a PHP script that sorts the array with Simple Insert Sort
//
//
echo "<h3 style=\"color:blue\">Develop a PHP script that sorts the array with Simple Insert Sort</h3>";
echo "===============================================================================================<br>";

$vec_ins = array(2,4,5,3,43,21,67,231,1,64);
$len=count($vec_ins);

echo "<br><b> Before </b>Simple Insert Sort";
var_dump($vec_ins);

for ($i=1;$i<$len;$i++){
    $x=$vec_ins[$i];
    $j=$i;
    while ($j>0 && $vec_ins[$j-1]>$x){
        $vec_ins[$j]=$vec_ins[$j-1];
        $j--;
    }
    $vec_ins[$j]=$x;
}

echo "<br><b>After</b> Simple Insert Sort";
var_dump($vec_ins);


//
//Develop a PHP script that sorts the array with bubble sort algorithm
//
//
echo "<h3 style=\"color:blue\">Develop a PHP script that sorts the array with bubble sort algorithm</h3>";
echo "===============================================================================================<br>";

$vec=array(2,4,5,3,43,21,67,231,1,64);
$vec_new=$vec;
$temp =array(0,0);

$l=count($vec);
$vec_s=$vec;

echo "<h4>the vec array before <b>bubble</b> short:</h4>";
var_dump($vec);

function Comp ($a,$b){
    if ($a>$b){
        return array($b, $a);
    }
    else {
        return array($a,$b);
    }
}

for ($r=0;$r<$l;$r++){
    if ($r<$l-1){
        for ($i=0;$i<$l-1;$i++){
              $temp=Comp($vec[$i],$vec[$i+1]);
              $vec_s[$i]=$temp[0];
              $vec_s[$i+1]=$temp[1];
              $vec=$vec_s;
    }
    $vec=$vec_s;
    
    }
    $vec=$vec_s;
}

echo "<h4>The vec array <b>after bubble</b> short:</h4>";
var_dump($vec);


// Develop an application that generates 6 ranomized selected numbers from the range of 1..40. 
// Each number should be different from the others. You should use the rand()

echo "<h3 style=\"color:blue\">Lotto Numbers.<br>"
. "application that generates 6 ranomized selected numbers from the range of 1..40.</h3>";
echo "================================================================================<br>";
$Ari_loto= array();
$Ari_loto[0]=mt_rand(1,40);

for ($i=1;$i<6;$i++){
    $Ari_loto[$i]=rand(1,40);
    if ($Ari_loto[$i]==$Ari_loto[$i-1]){
        $i--;
    }
}
var_dump($Ari_loto);

// (4) Develop a PHP document that returns back to the browser the multiplication table. 
//The output should be displayed using the HTML table tags.

echo "<h3 style=\"color:blue\">PHP document that returns back to the browser the multiplication table.<br>"
. "The output should be displayed using the HTML table tags.</h3>";
echo "================================================================================<br>";

function Rand_color (){
     return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
}
echo "<table border=\"1\">";
echo "<tr><th colspan=\"10\">The multiplication table</th></tr>";

for ($i=1;$i<=10;$i++){
    echo "<tr>";
    for ($r=1; $r<=10; $r++){
        $col=  Rand_color();
        echo "<td style=\"text-align:center;width:35px;background-color:$col\">".$i*$r."</td>";
    }
    echo "</tr>";
}
echo "</table>";

//
// (3) Develop a PHP script that compares two arrays and prints out their intersection.
//
echo "<h3 style=\"color:blue\">Develop a PHP script that compares two arrays and prints out their intersection.<br></h3>";
echo "================================================================================<br>";

$Ari_A=[1,2,3,4,5,6];
$Ari_B=[3,3,1,2,5,6];

$l_a=count($Ari_A);
$l_B=count($Ari_B);

echo "The size of Ari A is $l_a <br>The size of Ari B is $l_B<br>";
echo "<br>";

for ($i=0; $i<$l_a; $i++){
    if ($Ari_A[$i]==$Ari_B[$i]){
        echo "In the Arrays - Key $i for <b>Ari A is $Ari_A[$i]</b> and <b style=\"color:green\">equal to Ari B</b><br>";
    }
    else {
        echo "In the Arrays - Key $i for Ari A is <b>$Ari_A[$i]</b> and in Ari B is <b>$Ari_B[$i]</b> <b style=\"color:red\">and not equal</b><br>";
    }
}
var_dump($Ari_A,$Ari_B);

/* (2) The shuffle() function randomizes the order of the array's elements. 
 * When executing the shuffle() function all elements' key-value associations are lost. 
 * Develop a new function that shuffles an array without loosing the elements' key-value associations 
 * (tip: you need to use the array_keys() function).
 */


//(1) Create an array of all integer numbers between 10 and 20. Print this array using the var_dump() function.

echo "<h3 style=\"color:blue\">Create an array of all integer numbers between 10 and 20.<br>
    Print this array using the var_dump() function.</h3>";
echo "================================================================================<br>";

$Ari=array();
for ($i=10;$i<=20;$i++){
    $Ari[$i]=$i;
}
var_dump($Ari);

?>