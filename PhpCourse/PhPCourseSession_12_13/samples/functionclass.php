<?php
function doSomething()
{
	echo "<B>Do Something</B><BR>";
}

function sayHello($ob = "Students")
{
	echo "<B>Hello "+$ob+"</B>";
}

function sayGoodMorning($ob = "Students")
{
	echo "<B>Good Morning "+$ob+"</B>";
}

$funcs = get_defined_functions();

foreach($funcs as $k=>$v)
{
	echo "<br>$k";
}
echo "<p>";

foreach($funcs['user'] as $function)
{
	try
	{
		$ob = new ReflectionFunction($function);
		echo "<BR>function name... ".$ob->getName();
		echo "<BR>file name... ".$ob->getFileName();
		echo "<BR>start line... ".$ob->getStartLine();
		echo "<BR>end line... ".$ob->getEndLine();
		echo "<BR>";
	}
	catch(ReflectionException $exception)
	{
		echo "<BR><B>Exception Caught</B><BR>";
	}
}
?>