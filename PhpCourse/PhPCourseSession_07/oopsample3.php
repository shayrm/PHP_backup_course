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

$rec1 = new Rectangle(3,4);

//$rec1->width = 3;
//$rec1->height = 4;

$result = $rec1->area();

echo $result;


?>