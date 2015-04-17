<?php
try
{
    $soap_client = new SoapClient("http://www.webservicex.net/CurrencyConvertor.asmx?WSDL");
    $vec = array('FromCurrency'=>'USD','ToCurrency'=>'ILS');
    $ob = $soap_client->ConversionRate($vec);
    echo "<br> $1 is equal to:";
    echo $ob->ConversionRateResult;
    echo " NIS";
}
catch(SoapFault $exception)
{
    echo $exception->getMessage();
}
?>