<?php

/*
 * /
 *  this script shoud develop a web page that presents 
 *  all currency exchange rates (with shekels) 
 *  based on the Israeli Bank RESful web service.
 *  /
 *  /
 */

//first we will load the XML to a new object
//we will take the XML updated file from Bank of Israel URL:
//  http://www.boi.org.il/currency.xml

//Bank of Israel XML input URL
$bank_url="http://www.boi.org.il/currency.xml";

//create new object that include the XML file
$xml_ob = new SimpleXMLElement($bank_url,NULL,true);

// create HTML table format
// adding Pure CSS styling format to the table
echo <<<TABLE
<link href="Coupon_CSS_file_from_Pure-min.css" rel="stylesheet">
<h2 style="color:green">NIS Excange Rate from The Bank of Israel</h2>
<table class="pure-table pure-table-horizontal">
<thead>
<tr> <th>CURRENCY NAME</th> <th>CURRENCY UNIT</th> <th>CURRENCY CODE</th> <th>CURRENCY COUNTRY</th> <th>CURRENCY RATE</th></tr>
</thead>
TABLE;

//extract the "last update" filled from the source XML file
echo "<h3 style=\"color:red\">Update Date: ".$xml_ob->LAST_UPDATE."<br></h3>";

/* For each <CURRENCY> node, we echo a separate figure and print it in a new line. */
foreach ($xml_ob ->CURRENCY as $ob)
{
    echo "<tr>";
    echo "<td>".$ob->NAME."</td>";
    echo "<td>".$ob->UNIT."</td>";
    echo "<td>".$ob->CURRENCYCODE."</td>";
    echo "<td>".$ob->COUNTRY ."</td>";
    echo "<td>".$ob->RATE."</td>";
    echo "</tr>";
    
}

echo "</table>";
