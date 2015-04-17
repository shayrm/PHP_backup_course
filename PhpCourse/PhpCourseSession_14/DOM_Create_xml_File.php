<?php
/*Develop a PHP script with "Document Object Model" 
 * that creates the following XML document:
 *  
 * <?xml version="1.0"?>
        <classroom>
            <student>
                <name>Dave</name>
                <age>24</age>
            </student>
            <student>
                <name>Michael</name>
                <age>22</age>
            </student>
            <student>
                <name>John</name>
                <age>20</age>
            </student>
            <student>
                <name>Sharon</name>
                <age>27</age>
            </student>
       </classroom>
 */

//create the name and age array
$names_and_age=array ("Dave"=>"24",
    "Michael"=>"22",
    "John"=>"20",
    "Sharon"=>"27",
    "Shay"=>"30",
    "Shira"=>"35"
);

//create new DOM Cless
$doc = new DOMDocument('1.0');

//Nicely formats output with indentation and extra space.
$doc->formatOutput = true;

//create the new perent element node
$class = $doc->createElement('classroom');
//add it to the object
$doc->appendChild($class);        

// create student with name and age.
// the input is the name and age array
foreach ($names_and_age as $key=>$val){

    $std=$doc->createElement('student');
    $doc->appendChild($std);
    
    $name=$doc->createElement('name',$key);
    $std->appendChild($name);
    
    $age=$doc->createElement('age',$val);
    $std->appendChild($age);
        
}

$doc->save("Test_DOM_XML_Create.xml");
