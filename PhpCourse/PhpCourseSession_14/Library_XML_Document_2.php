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
$xmlDoc= new DOMDocument('1.0');
$xmlDoc->formatOutput = true;

//create the main "library" element
$lib= $xmlDoc->createElement('library');
$xmlDoc->appendChild($lib);

//define books in XML
add_book($xmlDoc,$lib,"Java Tutorial" ,"24", "James Douglas");
add_book($xmlDoc,$lib, "XML Fundamentals", "20", "Dave Ron");
add_book($xmlDoc,$lib, "XHTML Guide", "27", "Michael Shoolman");

$xmlDoc->save("Test_DOM_XML_Create_Lib.xml");


/* The Function add_book will do the following:
 * 
 * $book=$xmlDoc->createElement('book');
 * $lib->appendChild($book);
 * 
 * $name =$xmlDoc->createElement('name','Java Tutorial');
 * $book->appendChild($name);
 * 
 * $pages=$xmlDoc->createElement('pages','24');
 * $book->appendChild($pages);
 * 
 * $author =$xmlDoc->createElement('auther','James Douglas');
 * $book->appendChild($author);

*/

function add_book ($xmlDoc,$subNode,$nameInput,$pagesInput,$authorInput){

    $book=$xmlDoc->createElement('book');
    $subNode->appendChild($book);
    
    $name =$xmlDoc->createElement('name',$nameInput);
    $book->appendChild($name);
    
    $pages=$xmlDoc->createElement('pages',$pagesInput);
    $book->appendChild($pages);
    
    $author =$xmlDoc->createElement('auther',$authorInput);
    $book->appendChild($author);
    
}



