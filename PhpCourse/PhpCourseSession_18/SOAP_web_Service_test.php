<?php
try
{
    $soap_client =
    new SoapClient("http://www.webservicex.net/stockquote.asmx?WSDL");
    var_dump($soap_client->__getFunctions());
    var_dump($soap_client->__getTypes());
    
    $vec = array("symbol"=>"ERIC");
    $quote = $soap_client->GetQuote($vec);
    echo $quote->GetQuoteResult;
}
catch(SoapFault $exception)
{
    echo $exception->getMessage();
}