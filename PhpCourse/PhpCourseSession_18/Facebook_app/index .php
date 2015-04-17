<?php

require_once('../../PhpCourseSession_18/Facebook_app/facebook.php');

$facebook = new Facebook(array(
    'appId'  => '721867861216224',
    'secret' => '6072e005b70af176c14fa9111b9e2fbe',
    'cookie' => true));

$user  = $facebook->getUser();



$login_url   = $facebook->getLoginUrl(
    array(
        'redirect_uri'  => 'https://apps.facebook.com/shayrosapp',
        'scope' => 'email,offline_access,publish_stream,user_birthday,user_location,user_work_history,user_about_me,user_hometown')
);

$logout_url  = $facebook->getLogoutUrl();

if ($user)
{
    echo "<h1>logged in</h1>";
    $user_profile = $facebook->api('/me');
    var_dump($user_profile);
}
else if (!$user)
{
    echo "<script type='text/javascript'>top.location.href = '$login_url';</script>";
}
?>