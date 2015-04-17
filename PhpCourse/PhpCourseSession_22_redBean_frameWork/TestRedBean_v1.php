<?php

require '../../PhpCourseSession_22_redBean_frameWork/rb.php';
//setting up the database
R::setup('mysql:host=localhost;dbname=redbean','coupon','LetMeIn!!!');

//setting the debugging mode
R::debug(true);

//create new beans
$stdA = R::dispense('student');
    $stdA->fname = "Danidin";
    $stdA->lname = "Cohen";
    $stdA->student_id = 1233123;
    $stdA->average = 82;

$stdB = R::dispense('student');
    $stdB->fname = "Spiderman";
    $stdB->lname = "Levy";
    $stdB->student_id = 8452234;
    $stdB->average = 78;
    
$stdC = R::dispense('student');
    $stdC->fname = "Wonderwoman";
    $stdC->lname = "Linda";
    $stdC->student_id = 2334346;
    $stdC->average = 64;

//storing the two beans, updating the table with adding more lines to the 
    $idA = R::store($stdA);
    $idB = R::store($stdB);
    echo "<br>storing:<br>idA=".$idA." idB=".$idB;

//retrieving a bean
    $ob = R::load('student',$idA);
    echo "<br>retrieving:<br>".$ob;

//updating a bean
    $ob->average = 90;
    $idA = R::store($ob);
    $ob = R::load('student',$idA);
    echo "<br>updating:<br>".$ob;

$logger = R::getDatabaseAdapter();
echo "<br>output of logger - getDatabase";
var_dump($logger->getDatabase());

echo "<br>output of logger - getLogger";
$logger->getLogger();

//deleting all beans
//echo "<br>deleting all beans:<br/>";
//$data = R::wipe("student");
//echo $data;

?>