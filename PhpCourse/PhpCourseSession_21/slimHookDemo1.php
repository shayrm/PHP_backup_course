<?php
namespace Com\LifeMichael\Samples;
require '../../PhpCourseSession_21/Slim/Slim.php';
\Slim\Slim::registerAutoloader();
$application = new \Slim\Slim();
$application->hook('slim.before',
    function() {echo "<h2>slim.before</h2>";});
$application->hook('slim.before.dispatch',
    function() {echo "<h2>slim.before.dispatch</h2>";});
$application->get(
    '/simplehooks',
    function ()
    {
        echo "<data>response</data>";
        });
        $application->run();
?>