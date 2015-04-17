<?php
namespace Com\LifeMichael\Samples;
require '../../PhpCourseSession_21/Slim/Slim.php';
\Slim\Slim::registerAutoloader();
$application = new \Slim\Slim(array('debug' => true));
$application->get(
    '/dbg',
    function ()
    {
        $temp = 1/0;
        echo "<data>response sum=$sum</data>";
});
$application->run();

?>