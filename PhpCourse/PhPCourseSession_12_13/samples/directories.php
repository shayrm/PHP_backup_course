<?php
echo "<br>getcwd()=".getcwd();
mkdir("images");
echo "<br>".is_dir("images");
chdir("images");
echo "<br>getcwd()=".getcwd();
?>