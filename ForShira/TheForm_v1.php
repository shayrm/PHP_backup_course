<?php
//this form use HTML_QuickForm2 class
require_once 'HTML_QuickForm2-2.0.2/HTML/QuickForm2.php';

$form= new HTML_QuickForm2('create', 'post',basename(__FILE__));

$opts = array('size'=>40, 'maxlength'=>255);
$form->addElement('static','header', null, $opts);

$form->addElement('text','name', 'שם פרטי ומשפחה', $opts)->setLabel('first name');
$form->addElement('text', 'email', 'כתובת אמייל', $opts)->setLabel('Please enter your eMail address');;
$form->addElement('textarea','story', array('rows'=>20,'cols'=>100, 'size'=>100))->setLabel('You can enter your story here');
$form->addElement('submit','register','הרשם עכשיו');


echo $form;