<?php
namespace Com\CouponsPlatform\Dom1;
include 'newCouponDAO_ver1.php';

require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$application = new \Slim\Slim(array(
    'debug' => true));

/*
//I have change the Slim Env file 
//from
//$env['slim.errors'] = @fopen('php://stderr', 'w'); -- the original setup
//to
// $env['slim.errors'] = @fopen('SlimLogErrorFile.log', 'a+');
*/

$logger = $application->getLog();
$logger->setEnabled(true);
$logger->setLevel(\Slim\Log::DEBUG);

// output of each method should be in xml format
//$application->response->headers->set('Content-Type', 'text/xml');

$application->get(
   '/coupons/csv(/:'
    
    );


$application->get(
    '/coupons/xml(/:id)',
    
    function ($id = 0) use($logger)
    {
        $logger->info("handling a request with id=".$id);

        if($id==0)
        {
            //returning an xml that describes all coupons
            $logger->info("handling a request for getting an xml that describes all coupons");
            
            //create new object of CouponPlatfromDAO
            $couponInfo = new \CouponsPlatformDAO();
            $allCoupons=$couponInfo->getAllCoupons();
            
            include 'XMLFormat.php';
            $xmlOB = new \SimpleXMLElement($xmlstr);
            $xmlOB->addAttribute('type', 'CurrentCoupons');
            $xmlOutputFile="coupons_XML_output.xml";
            
            
            //enter each coupon as a child for CurrentCoupons
            foreach ($allCoupons as $obj)
            {
                $couponAtt=$xmlOB->addChild('Coupon');
                $couponAtt->addChild('ID',$obj->id);
                $couponAtt->addChild('BusinessID',$obj->business_id);
                $couponAtt->addChild('Name',$obj->name);
                $couponAtt->addChild('Desciption',$obj->description);
                $couponAtt->addChild('ImageFilename',$obj->imagefilename);
            }
            
                       
            $xmlOB->asXML($xmlOutputFile);
            echo "<h2> extract all coupon info to XML file</h2>";
            echo "<hr>";
            
            echo "Results were saved in $xmlOutputFile<br>";
            echo "<hr>";
            echo "XML file contined the following info:<br><br>";
            echo htmlspecialchars(file_get_contents("$xmlOutputFile"), ENT_XML1);
        }
        else
        {
            //returning an xml that describes a specific coupon
            $logger->info("handling a request for getting an xml that describes a specific coupon");
            $couponInfo = new \CouponsPlatformDAO();
            $oneCoupon=$couponInfo->getCoupon($id);
            
            echo "<h2>Coupons info:</h2><br>";
            echo "<hr>";
            echo "ID: --$oneCoupon->id<br>";
            echo "Business ID: -- $oneCoupon->business_id<br>";
            echo "Name: -- $oneCoupon->name<br>";
            echo "Desciption: --$oneCoupon->description<br>";
            echo "Image file name: --$oneCoupon->imagefilename<br>";
            
            
        }
    });




$application->run();
?>