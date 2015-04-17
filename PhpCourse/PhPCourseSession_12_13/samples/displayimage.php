<?php
$str = file_get_contents('pix.gif');
file_put_contents('imgcopy.gif',$str);
?>
<h2>bla bla</h2>
<img src="imgcopy.gif">