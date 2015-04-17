<?php
trait Gamer {
    function play(){
        echo "I am playing with <h2>GAGA</h2>";
    }
}

trait Painter
{
    function paint()
    {
        echo "<hr />";
        echo "<h1>paint</h1>";
    }
}

class person {
    function play(){
        echo "playing from person with <h2>PAPA</h2>";
    }
}

class student extends person{
    use Gamer, Painter;
}

$ob=new student();
$ob->play();
$ob->paint();

