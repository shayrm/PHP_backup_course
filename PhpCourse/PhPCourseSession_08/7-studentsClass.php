<?php


/*You should declare the Student class based on the following UML diagram. 
 * In addition, you should declare the get_details() 
 * method that returns a string representation of the Student object on which it is executed. 
 * You should code the Student class and test it using the script below.
 * 
 */

class student {
    var $name;
    var $id;
    var $avarage;
    
    function __construct($nameVal,$idVal,$avarageVal){
        $this->name=$nameVal;
        $this->id=$idVal;
        $this->avarage=$avarageVal;
        echo "<h3>you have called for The Studen class</h3>";
    }
    
    function getId (){
        return $this->id;
    }
    
    function getName (){
        return $this->name;
    }
    
    function getAvarage (){
        return $this->avarage;
    }
    
    function setName ($nameVar){
        $this->name=$nameVar;
    }
    
    function setAvarage ($avarageVar){
        $this->avarage=$avarageVar;
    }
    
    function getDetails(){
        $theName=$this->getName();
        $theId=$this->getId();
        $theAvarage=$this->getAvarage();
        
        echo "<table border=\"2\" bgcolor=\"blue\" width=\"300\">";
        echo "<thead bgcolor=\"yellow\"><tr><th>Name</th><th>ID </th><th> Avarage</th></tr></thead>";
        echo "<tr><td>$theName</td><td>$theId</td><td>$theAvarage</td></tr>";
        echo "</table>";
        echo "<hr>";
    }
}
 
$student1=new student("Moshe","02121212",98);
$student1->getDetails();

$student2=new student("Shean", "03131313", 95);
$student2->getDetails();
