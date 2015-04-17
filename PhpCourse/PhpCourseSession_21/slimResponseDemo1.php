<?php
namespace Com\LifeMichael\Samples;
require '../../PhpCourseSession_21/Slim/Slim.php';
\Slim\Slim::registerAutoloader();
$application = new \Slim\Slim();
$application->get(
    '/response',
    function ()
    {
        GLOBAL $application;
        echo "&nbsp;<br/><b>response status</b>";
        echo "<br/>application->response->getStatus()=".
            $application->response->getStatus();
        echo "<br/>&nbsp;<br/><b>response headers</b>";
        $application->response->headers->set('Content-Type', 'text/html');
        echo "<br/>application->response->headers->get('Content-Type')=".
            $application->response->headers->get('Content-Type');
        echo "<br/>&nbsp;<br/><b>response cookies</b>";
        echo "<br/>the company cookie was created";
        echo "<br/>&nbsp;<br/><b>response status introspection</b>";
        echo "<br/>isOk()=".$application->response->isOk();
        echo "<br/>isNotFound()=".$application->response->isNotFound();
        echo "<br/>isServerError()=".$application->response->isServerError();
        });
        $application->run();
       
?>