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

$ob = new ReflectionMethod('Rectangle','setHeight');

echo "<br>\$ob->isAbstract()=".$ob->isAbstract();
echo "<br>\$ob->isFinal()=".$ob->isFinal();
echo "<br>\$ob->isPublic()=".$ob->isPublic();
echo "<br>\$ob->isPrivate()=".$ob->isPrivate();
echo "<br>\$ob->getName()=".$ob->getName();
echo "<br>\$ob->getStartLine()=".$ob->getStartLine();
echo "<br>\$ob->getEndLine()=".$ob->getEndLine();
?>