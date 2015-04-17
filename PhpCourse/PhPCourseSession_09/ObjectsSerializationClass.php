<?php
class Car
{
    private $id;
    private $brand;
    private $renter_name;
    private $exit_parking_time;

    public function __construct($id_val,$brand_val,$renter_name_val)
    {
        $this->id =$id_val;
        $this->brand = $brand_val;
        $this->renter_name=$renter_name_val;
    }

    public function set_id($id_val)
    {
        $this->id = $id_val;
    }

    public function set_brand($brand_val)
    {
        $this->brand = $brand_val;
    }

    public function set_renter_name($renter_name_val)
    {
        $this->renter_name = $renter_name_val;
    }

    public function get_id()
    {
        return $this->id;
    }

    public function get_brand()
    {
        return $this->brand;
    }

    public function get_renter_name()
    {
        return $this->renter_name;
    }

    public function __sleep()
    {
        return array('id','brand');
    }

    public function __wakeup()
    {
        $this->exit_parking_time = date("F j, Y, g:i a");
    }
}


$obA = new Car(232323,'Goyoga','Moshe Israeli');
var_dump($obA);

echo "<br>";
$ob_ser = serialize($obA);

echo "<br>The serialize array: $ob_ser";

$obB = unserialize($ob_ser);
echo "<br>The <b>ubserialize</b> array:";
var_dump($obB);
?>