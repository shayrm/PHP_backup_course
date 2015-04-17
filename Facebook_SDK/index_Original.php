<?php

require_once('facebook.php');

$facebook = new Facebook(array(
    'appId'  => 'APP_ID',
    'secret' => 'APP_SECRET',
    'cookie' => true));

$user  = $facebook->getUser();



$login_url   = $facebook->getLoginUrl(
    array(
        'redirect_uri'  => 'https://apps.facebook.com/yoyogagala',
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