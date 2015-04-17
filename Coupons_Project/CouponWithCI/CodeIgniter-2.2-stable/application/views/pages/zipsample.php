<?php

//the echo will not work here, the download will be imidiate without output to the file.
echo "<h1>Your file will be downloaded now...</h1>";

$name ='data1.txt';
$data='simple data one line...';
$this->zip->add_data($name,$data);

$name ='data2.txt';
$data='simple data two line...';
$this->zip->add_data($name,$data);

//$this->zip->download('backup.zip');
$this->zip->archive('C:\Users\eoismes\Downloads\backup.zip');

echo '<a href="home">Home</a>';