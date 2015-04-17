<?php
class Rectangle
{
  var $width;
  var $height;

  function area()
  {
    return $this->width * $this->height;
  }
}

$rec1 = new Rectangle();

$rec2 = $rec1;

$rec1->width = 3;
$rec1->height = 4;
$rec2->width = 5;
$rec2->height = 10;

//$result = $rec1->width*$rec1->height;
$result = $rec1->area();

echo $result;


?>