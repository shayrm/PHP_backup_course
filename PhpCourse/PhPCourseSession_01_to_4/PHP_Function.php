<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// function that calculate *Rectangle Area* when it gets the inputs of 
// the baes and high of the rectangle

function Rec_Area ($base, $high) {
    $Area=($base*$high)/2;
    return $Area;
}

// function that calculate *Circle Area*
// the function receive radius R as input

function Cir_Area ($red) {
    $Area=(3.14*$red^2);
    return $Area;
}

//function that calculate *Rectangle Perimeter* 
// the function receive the rectange parameters

function Rec_Per($base, $high){
    $Per=2*($base+$high);
    return $Per;
}

// function that calculate *Circle Perimeter*
// the function receive radius R as input

function Cir_Per ($red){
    $Per=2*3.14*$red;
    return $Per;
}

// calculate the Biggest of Four Number (option 1)
//
function The_Biggest1($numA,$numB,$numC,$numD){
    
        if ($numA>$numB && $numA>$numC && $numA>$numD){
            return $numA;
        }
        if ($numB>$numA && $numB>$numC && $numB>$numD){
            return $numB;
        }
        if ($numC>$numA && $numC>$numB && $numC>$numD){
            return $numC;
        }
        if ($numD>$numA && $numD>$numB && $numD>$numC){
            return $numD;
        }
    
}

// calculate the Biggest of Four Number (option 2)
//
function The_Biggest3($numA,$numB,$numC,$numD){
    if ($numA>$numB){
        $tmp_1=$numA;
    }
        else {
         $tmp_1=$numB;   
        }
    if ($numC>$numD){
        $tmp_2=$numC;
    }
        else {
         $tmp_2=$numD;   
        }
    if ($tmp_1>$tmp2){
        return $tmp_1;
    }
        else {
         return $tmp_2;   
        }
}

// calculate the Biggest of Four Number (option 3)
//

function The_Biggest4 ($numA,$numB,$numC,$numD){
    $Ari= array ($numA,$numB,$numC,$numD);
    $L=count($Ari);
    $line=max($Ari);
    return $line;
    }
    
$most= The_Biggest4(2 , 4, 5, 9);
echo "the biggest number is: $most";
