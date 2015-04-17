<?php
$vec=array("michael","david","john","maria");
$str=implode("-",$vec);
echo "str=".$str;
$array=explode("-",$str);
echo "<h2>array</h2>";
foreach($array as $k => $v)
{
 echo "<br>\$v=$v";
}
?>