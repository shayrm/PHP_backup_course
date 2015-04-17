<?php
/*Declare a class that describes a person. 
 * Choose the fields (instance variables) this class should inclde. 
 * Declare each one of them with the most restrictive access level. 
 * For each one of these instance variables you should declare a method that enables us setting the variable value 
 * and a method that enables us retrieving a variable value. 
 * You should test this class by instantiating it and check the __toString magic method, 
 * your class should include as well.
 * 
 */

class person {
    private $id;
    private $name;
    private $gander;
    private $hight;
    
    function __construct($idVal,$nameVal,$ganderVal,$hightVal){
        $this->id=$idVal;
        $this->name=$nameVal;
        $this->gander=$ganderVal;
        $this->hight=$hightVal;
        echo "<h3>There was a call for Person class</h3>";
    }
    function __toString(){
        
        $idVar=$this->getId();
        $nameVar=$this->getName();
        $ganderVar=$this->getGander();
        $hightVar=$this->getHight();
        
        return "Person info include: <br>ID:" .$idVar ."<br>NAME: $nameVar <br>Gander: $ganderVar <br>Hight: $hightVar Cm";
        
    }
        
    // The setter functions
    
    function setId ($id){
        $this->id=$id;
    }
    function setName ($name){
        $this->name=$name;
    }
    
    function setGander ($gander){
        $this->gander=$gander;
    }
    
    function setHight ($hight){
        $this->hight=$hight;
    }
    
    // The getters functions
    
    function getId(){
        return $this->id;
    }
    
    function getName(){
        return $this->name;
    }
    
    function getGander (){
        return $this->gander;
    }
    
    function getHight (){
        return $this->hight;
    }
}


$var_id="999111"; $var_name="Shay RM"; $var_gander="M"; $var_height=165;
$ob=new person($var_id, $var_name, $var_gander, $var_height);

echo $ob;