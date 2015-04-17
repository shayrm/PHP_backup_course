<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "<div id=\"heading\" style=\"width:500px;background-color:red;text-align:center;\"><br>";
echo "<h2 style=\"color:Yellow\">Assignment of PHP course #8 Session number-5  30/07/14</h2>";
echo "<hr>";
echo "<p></p></div>";




//============================================================================================
//
//HTTP Request Parameters
//

//Develop a PHP script that prints out a list of all the parameters 
//it received together with the request. 
//You should use the $_REQUEST global variable.

?>
<html lang="he-il">
    <head>
        <meta charset="UTF-8">
        <title> Ses 5 Home work</title>
    </head>
    
    <body>
        <form method="POST">
            <br>Please enter some numbers <input type="number" name="Number">
            <br>Please enter some text <input type="text" name="Text">
            <br>Send it now! <input type="submit">
        </form>
    </body>
</html>

<?php

//var_dump($_REQUEST);
$Input_number=$_REQUEST['Number'];
$Input_text=$_REQUEST['Text'];

echo "<br> The number you have enter is:"."<h4> $Input_number </h4>";
echo "<br> The Text you have enter is:". "<h4> $Input_text </h4>";

?>