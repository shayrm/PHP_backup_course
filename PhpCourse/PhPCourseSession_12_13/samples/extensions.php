<?php
$extensions = get_loaded_extensions();
foreach($extensions as $key => $value)
{
	$ob = new ReflectionExtension($value);
	echo "<br>extension name: ".$value;
	echo "<br>extension version: ".$ob->getVersion();
	echo "<br>";
}
?>