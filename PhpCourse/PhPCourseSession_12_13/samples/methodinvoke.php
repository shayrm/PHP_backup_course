<?php
class Rectangle
{
	private $width;
	private $height;
	function Rectangle($valW,$valH)
	{
		$this->setHeight($valH);
		$this->setWidth($valW);
	}
	function area()
	{
		return $this->width * $this->height;
	}
	private function setWidth($val)
	{
		if($val>0)
		{
			$this->width = $val;
		}
	}
	private function setHeight($val)
	{
		if($val>0)
		{
			$this->height = $val;
		}
	}
}



$rec = new Rectangle(3,4);

$setHeightMethod = new ReflectionMethod('Rectangle','setHeight');
$setWidthMethod = new ReflectionMethod('Rectangle','setWidth');

$setHeightMethod->setAccessible(true);
$setWidthMethod->setAccessible(true);

$setHeightMethod->invoke($rec,8);
$setWidthMethod->invoke($rec,7);

echo $rec->area();

?>