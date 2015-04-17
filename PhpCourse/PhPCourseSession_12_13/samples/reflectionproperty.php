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

$ob = new ReflectionProperty('Rectangle','width');

echo "<br>\$ob->isPublic()=".$ob->isPublic();
echo "<br>\$ob->isPrivate()=".$ob->isPrivate();
echo "<br>\$ob->getName()=".$ob->getName();
?>