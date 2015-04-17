<?php
class Rectangle {}

function doSomething($varA, &$varB, Rectangle $varC, $varD=12) 
{ 
	echo "<br>something<br>";
}

$ob = new ReflectionFunction("doSomething");

foreach ($ob->getParameters() as $index => $param) 
{
	echo "<br>parameter name: ".$param->getName();
	echo "<br>parameter class: ".$param->getClass();
	echo "<br>parameter allows null: ".$param->allowsNull();
	echo "<br>passed by reference: ".$param->isPassedByReference();
	echo "<br>";
}

//var_dump($ob->getParameters());
?>