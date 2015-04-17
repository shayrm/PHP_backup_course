<?php

/*interface Iterator {
    function current();
    function next();
    function rewind();
    function key();
    function valid();
//  function seek($key);
}

*/

class student implements Iterator {
    private $courses=array("History1","French2","English","Math","Physics");
    private $index;
    
    function current(){
        return $this->courses[$this->index];
    }
    
    function next(){
        $this->index+=1;
    }
    
    function rewind(){
        $this->index=0;
    }
    
    function key(){
        return $this->index;
    }
    
    function valid(){
        return isset($this->courses[$this->index]);
    }
}

$ob = new student();

foreach ($ob as $key => $value){
    echo "<br>$key::$value\n";
}