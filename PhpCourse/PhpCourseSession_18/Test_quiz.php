<?php
function doSomething(&$b)
{
$b = 1+ ++$b;
}
$a=4;
doSomething($a);
echo $a;
?>