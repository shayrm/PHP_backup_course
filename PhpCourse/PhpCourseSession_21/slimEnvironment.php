<?php
namespace Com\LifeMichael\Samples;

require '../../PhpCourseSession_21/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$application = new \Slim\Slim();

$application->get(
    '/env',
    function ()
    {
        $environemnt = \Slim\Environment::getInstance();
        echo "<br/>slim.url_scheme=".$environemnt['slim.url_scheme'];
        echo "<br/>REQUEST_METHOD=".$environemnt['REQUEST_METHOD'];
        echo "<br/>SCRIPT_NAME=".$environemnt['SCRIPT_NAME'];
        echo "<br/>PATH_INFO=".$environemnt['PATH_INFO'];
        echo "<br/>SERVER_NAME=".$environemnt['SERVER_NAME'];
    });

$application->run();
?>