<?php
/*
 * build REStful web service for coupon with Slim Web service framework
 */
namespace Com\ShayMCoupon\Samples;

require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$application = new \Slim\Slim (array('
                                debug' => true));

$logger = $application->log;
$logger->setEnabled(true);
$logger->setLevel(\Slim\Log::DEBUG);

$application->get(
    '/coupons(/:id)',
    function ($id=0)
    {
        GLOBAL $logger;
        $logger->info("start the get handling function");
    echo "id=".$id;
    
    if ($id==0)
    {
     //returen an xml that described all coupons
        $logger->info("start the get handling a request that returen an xml that described all coupons");
    }
    
    else 
    {
        //returen an xml that describe a specific copuns (by ID)
        $logger->info("start the get handling a request that returen an xml that described specific coupon");
        
        //geting a coupon object from the database
        //.....
        
        //building an xml doc that describes the coupon
        //using the onjects variables values
        
        //printing out using a simple echo command the xml doc
        
    }
    }
    