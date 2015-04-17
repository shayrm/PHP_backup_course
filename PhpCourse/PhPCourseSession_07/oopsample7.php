<?php
class Rectangle
{
  private $width;
  private $height;

  //function Rectangle($numA,$numB)
  function __construct($numA,$numB)
  {
    //$this->width=$numA;
    //$this->height=$numB;
    $this->setWidth($numA);
    $this->setHeight($numB);
  }

  function getHeight() 
  {
    return $this->height;
  }

  function getWidth()
  {
    return $this->width;
  }

  function setHeight($number)
  {
    if($number>0)
    {
      $this->height = $number;
    }
  }

  private function setWidth($number)
  {
    if($number>0)
    {
      $this->width = $number;
    }
  }

  function area()
  {
    return $this->getWidth() * $this->getHeight();
  }

  function perimeter()
  {
    return 2*($this->getWidth()+$this->getHeight());
  }
}

$w = 4;
$h = 7;
$rec1 = new Rectangle($w,$h);
//$rec1->width = 7;
//$rec1->setWidth(7);
echo "area of the rectangle is ".$rec1->area();
?>