<?php

//The Business class

class Business {
    //private  $id;
    private  $name;
    private $street;
    private $number;
    private $city;
    private $zip;
    private $telephone;
    private $latitude;
    private $longtitude;
    /**
     * @return the $id
     */


    public function __construct($name,$street,$number,$city,$zip,$telephone,$latitude, $longtitude)
    {
        //$this->setId($id);
        $this->setName($name);
        $this->setStreet($street);
        $this->setNumber($number);
        $this->setCity($city);
        $this->setZip($zip);
        $this->setTelephone($telephone);
        $this->setLatitude($latitude);
        $this->setLongtitude($longtitude);
    }

    //public function getId()
    //{
    //    return $this->id;
    //}

    /**
     * @return the $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return the $street
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @return the $number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @return the $city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return the $zip
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @return the $telephone
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @return the $latitude
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @return the $longtitude
     */
    public function getLongtitude()
    {
        return $this->longtitude;
    }

    /**
     * @param field_type $id
     *
     public function setId($id)
     {
     $this->id = $id;
     }*/

    /**
     * @param field_type $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param field_type $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @param field_type $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @param field_type $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @param field_type $zip
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * @param field_type $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @param field_type $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @param field_type $longtitude
     */
    public function setLongtitude($longtitude)
    {
        $this->longtitude = $longtitude;
    }


}

// Define Copun class

