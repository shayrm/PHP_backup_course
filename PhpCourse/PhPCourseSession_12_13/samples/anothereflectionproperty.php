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
	function setWidth($val)
	{
		if($val>0)
		{
			$this->width = $val;
		}
	}
	function setHeight($val)
	{
		if($val>0)
		{
			$this->height = $val;
		}
	}
}

$rec = new Rectangle(4,5);

$recProperty = new ReflectionProperty('Rectangle','width');

$recProperty->setAccessible(true);

$recProperty->setValue($rec,7);

echo  $rec->area();

?>