<?php

/*
 * exmplate how to use slim
 * inorder to run it you should enter the followng in the browser:
 * http://localhost/CodeWithZend/PhpCourseSession_21/demoSlim_1.php/hello/Shay/Meshulam
 */
namespace Com\LifeMichael\Samples;

require '../../PhpCourseSession_21/Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$application = new \Slim\Slim();
$application->get(
    '/hello/:firstname/:lastname',
    
    function ($first,$last)
    {
        echo "<h3>Hello, $first $last</h3>";
});
$application->run();
