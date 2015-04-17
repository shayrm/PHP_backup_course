<?php
$cookievalue = $_COOKIE['id'];
setcookie(“id”,”usa123123”,time()+86400*3);
echo "<h2>$cookievalue</h2>";

echo "you have just received a response that includes a cookie!";
?>