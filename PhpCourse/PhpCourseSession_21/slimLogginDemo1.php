<?php
namespace Com\LifeMichael\Samples;
require '../../PhpCourseSession_21/Slim/Slim.php';


//use the magic function __autolloading
\Slim\Slim::registerAutoloader();
$application = new \Slim\Slim();

$logger = $application->log;
$logger->setEnabled(true);
$logger->setLevel(\Slim\Log::DEBUG);

$environment = \Slim\Environment::getInstance();

$application->get(
    '/simplelogs',
    function ()
    {
        GLOBAL $logger;
        $logger->info("start the get handling function");
        echo "<data>response</data>";
        $logger->info("end the get handling function");
    });
    $application->run();
    ?>