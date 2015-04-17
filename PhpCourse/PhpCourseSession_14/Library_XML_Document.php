<?php
/*
 * Develop a PHP script that creates the following XML document:

<?xml version="1.0"?>
<library>
  <book>
    <name>Java Tutorial</name>
    <pages>24</pages>
    <author>James Douglas</author>
  </book>
  <book>
    <name>PHP Certification Guide</name>
    <pages>22</pages>
    <author>Mike Brant</author>
  </book>
  <book>
    <name>XML Fundamentals</name>
    <pages>20</pages>
    <author>Dave Ron</author>
  </book>
  <book>
    <name>XHTML Guide</name>
    <pages>27</pages>
    <author>Michael Shoolman</author>
  </book>
</library>
 */

//creat array with the XML elements values

class book_xml {
    private $mainAtt;
    private $name;
    private $pages;
    private $author;
    
    
    function __construct($mainAtt,$name,$pages,$author){
        
        //creat new Document Object Model for XML
        $DOMdoc = new DOMDocument('1.0');
        $DOMdoc->formatOutput = true;
        
        $this->setMainAtt($mainAtt);
        $this->setName($name);
        $this->setPages($pages);
        $this->setAuthor($author);
        
        $sub_att=$this->xml_main_atribute ($DOMdoc,$this->getMainAtt());
                       
        
    }
    
    
	function xml_main_atribute($DOMdoc, $main){
             
        $library= $DOMdoc->createElement($main);
        //add it to the object
        $DOMdoc->appendChild($library);
        return $library;
    }
    
    function book_attribute ($DOMdoc,$sub_name,$name,$pages,$author){
        $std=$DOMdoc->createElement($sub_name);
        $DOMdoc->appendChild($std);
        
        
    }
	
    
    /****
    /**
     * @return the $mainAtt
     */
    public function getMainAtt()
    {
        return $this->mainAtt;
    }
    
    /**
     * @param field_type $mainAtt
     */
    public function setMainAtt($mainAtt)
    {
        $this->mainAtt = $mainAtt;
    }
    
	
	
	/**
     * @return the $name
     */
    public function getName()
    {
        return $this->name;
    }

	/**
     * @return the $pages
     */
    public function getPages()
    {
        return $this->pages;
    }

	/**
     * @return the $author
     */
    public function getAuthor()
    {
        return $this->author;
    }

	/**
     * @param field_type $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

	/**
     * @param field_type $pages
     */
    public function setPages($pages)
    {
        $this->pages = $pages;
    }

	/**
     * @param field_type $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    
    
}


$books_info=array (
    "Java Tutorial"=> array ("24", "James Douglas"),
    "PHP Certification Guide"=> array("22", "Mike Brant"),
    "XML Fundamentals"=> array("20", "Dave Ron")
);

foreach ($books_info as $key1=>$val1){
    echo "Book name--- ".$key1."---";
    foreach ($val1 as $key2=>$val2){
        echo  "pages: ".$val2 ." auther ".$val2."<br>";
    }
}