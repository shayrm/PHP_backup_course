<?php
/*
 * Coupon Class
 */

class Coupon {

    //atributes definitions for Coupon class
    private $id;
    private $category_id;
    private $business_id;
    private $name;
    private $description;
    private $imagefilename;

    function __construct($id,$catgory_id,$business_id,$name,$description,$imagefilename)
    {
        $this->setId($id);
        $this->setCategory_id($category_id);
        $this->setName($name);
        $this->setDescription($description);
        $this->setImagefilename($imagefilename);
    }


    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return the $category_id
     */
    public function getCategory_id()
    {
        return $this->category_id;
    }

    /**
     * @return the $business_id
     */
    public function getBusiness_id()
    {
        return $this->business_id;
    }

    /**
     * @return the $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return the $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return the $imagefilename
     */
    public function getImagefilename()
    {
        return $this->imagefilename;
    }

    /**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param field_type $category_id
     */
    public function setCategory_id($category_id)
    {
        $this->category_id = $category_id;
    }

    /**
     * @param field_type $business_id
     */
    public function setBusiness_id($business_id)
    {
        $this->business_id = $business_id;
    }

    /**
     * @param field_type $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param field_type $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param field_type $imagefilename
     */
    public function setImagefilename($imagefilename)
    {
        $this->imagefilename = $imagefilename;
    }

     


}