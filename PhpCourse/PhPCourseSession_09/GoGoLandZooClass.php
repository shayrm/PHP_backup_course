<?php

/*
 * In GoGoLand great country we can find different types of creatures. 
 * The GoGoCat, GoGoDog and GoGoBird classes describe three types of creatures. 
 * Each one of these classes extends the GoGoCreature abstract class. 
 * 
 * The GoGoZoo class describes a zoo with animals of the GoGoDog, GoGoCat and the GoGoBird types.

Based on the code below, you should define the following classes:
GoGoZoo
GoGoDog
GoGoCat
GoGoBird

Calling the sayHello() method on a GoGoZoo object should indirectly call the sayHello() method 
on each one of the objects that represent the animals in the zoo. 

The GoGoZoo class should implement the Zoo interface. 
 */

interface Zoo {
    function sayHello();
    }

    
class GoGoZoo implements Zoo{
    private $animals;
    
    public function __construct($vec){
        $this->animals=$vec;
    }
    
    public function sayHello() {
        foreach($this->animals as $ob)
        {
            $ob->sayHello();
        }
    }
}    
    
abstract class GoGoCreature
{
    protected $name;
    public abstract function sayHello();
}

class GoGoDog extends GoGoCreature {
    
    function __construct($name){
        $this->setName($name);
    }
    
    public function sayHello(){
        echo "<br>Say hello to <b>". $this->getName()."</b> The dog";
    }
    
    function getName (){
        return $this->name;
    }
    
    function setName($dogName){
        $this->name=$dogName;
    }
}


class GoGoCat extends GoGoCreature {
    
    function __construct($name){
        $this->setName($name);
    }
    public function sayHello(){
        echo "<br>Say hello to ". $this->getName()." The cat";
    }

    function getName (){
        return $this->name;
    }

    function setName($catName){
        $this->name=$catName;
    }
}

class GoGoBird extends GoGoCreature {
    
    function __construct($name){
        $this->setName($name);
    }
    
    public function sayHello(){
        echo "<br>Say hello to ". $this->getName()." The bird";
    }

    function getName (){
        return $this->name;
    }

    function setName($birdName){
        $this->name=$birdName;
    }
}

$vec = array(
    new GoGoDog("Joe"), 
    new GoGoCat("Mitzi"), 
    new GoGoBird("Twitty"), 
    new GoGoDog("Johnson"));

$zoo = new GoGoZoo($vec);
$zoo->sayHello();