<?php
$fp = fopen('texts\\mystory.txt', 'w+');
fwrite($fp, 'Hello');
fwrite($fp, "\t");
fwrite($fp, ' Canada!');
fclose($fp);
?>