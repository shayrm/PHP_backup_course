<?php
class Rectangle
{
  var $width;
  var $height;

  //function Rectangle($numA,$numB)
  function __construct($numA,$numB)
  {
    $this->width=$numA;
    $this->height=$numB;
  }

  function area()
  {
    return $this->width * $this->height;
  }
}

$w = $_GET['width'];
$h = $_GET['height'];
$rec1 = new Rectangle($w,$h);
echo "area of the rectangle is ".$rec1->area();
?>