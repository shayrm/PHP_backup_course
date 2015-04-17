<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Student
    {
        private $id;
        private $average;
        private $name;
        private $school;

        function __construct($idVal, $averageVal, $nameVal, $schoolVal)
        {
        $this->id = $idVal;
        $this->average = $averageVal;
        $this->name = $nameVal;
        $this->school=$schoolVal;
        }
        public function getId()
        {
        return $this->id;
        }
        public function getAverage()
        {
        return $this->average;
        }
        public function getName()
        {
        return $this->name;
        }
        public function getSchool()
        {
        return $this->school;
        }
        public function __toString()
        {
        return $this->getName () . " id=" . $this->getId () . 
        " average=" . $this->getAverage () ."School=" .$this->getSchool();
        }
    }

$vec = [ 
        new Student ( 123123, 98, "danidin", "School1"),
        new Student ( 523434, 88, "moshe", "School2"),
        new Student ( 456544, 92, "spiderman", "School3"),
        new Student ( 744565, 77, "superman", "School4") 
        ];

echo "<h2>before</h2>";

foreach ( $vec as $k => $v )
    {
        echo "<Br>$k => " . $v;
    }

usort ( $vec, function ($a, $b)
    {
    echo "<br>comparing between ".$a->getName()." and ".$b->getName();
    return $a->getId() - $b->getId();
    } );

echo "<h2>after</h2>";

foreach ( $vec as $k => $v )
    {
    echo "<Br>$k => " . $v;
    }
?>