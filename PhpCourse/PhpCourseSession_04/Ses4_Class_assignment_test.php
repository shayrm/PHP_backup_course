<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Person
    {
        private $P_id; //this is a private var
        private $P_name;
        private $P_height;
    
        // this is a constuctor function that puts the values into the class (mandatory) 
        function __construct($var_id,$var_name,$var_height){
             $this->P_id =$var_id;
             $this->P_name =$var_name;
             $this->P_height =$var_height;
         }
         
         public function getId(){
             return $this->P_id;
         }
         public function getName(){
             return $this->P_name;
         }
         
         public function getHeight(){
             return $this->P_height;
         }
         
         //this is a magic function - it will return the values like echo
         public function __toString()
        {
        return "Person ID = ".$this->getId()." || " ." Name= ".$this->getName()." || ". 
        " Height= " .$this->getHeight ();
        }
    }
    
    $vec = [
        new Person (101, "Moshe", 650),
        new Person (102, "Boby", 160),
        new Person (103, "Cooki", 120),
        new Person (104, "Shushu", 50),
        new Person (105, "Beebee", 120),
    ];
    
    echo "<br>";
    echo "<h3>Before sorting:</h3>";
    echo "=================================";
    
    
foreach ( $vec as $k => $v )
    {
        echo "<Br>$k => " . $v;
    }
    
    echo "<br>";
usort ( $vec, function ($a, $b)
    {
    echo "<br>comparing between ".$a->getName()." and ".$b->getName();
    //return $a->getHeight() - $b->getHeight();
    if ($a->getName() > $b->getName()){
        return 1;
    }
    else if ($a->getName() < $b->getName()){
        return -1;
    }
    else        return 0;
    } 
    );
    
    echo "<br><h2 style=\"color:red\">After sorting:</h2>";
    echo "=====================================";

foreach ( $vec as $k => $v )
    {
    echo "<Br>Key $k => " . $v;
    }
    ?>