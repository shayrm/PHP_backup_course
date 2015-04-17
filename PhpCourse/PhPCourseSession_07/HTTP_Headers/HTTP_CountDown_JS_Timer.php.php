<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Rediraction Page
//Develop a PHP script that redirects to www.zindego.com website.

/* $today = time () ;
$target = $today+20;
$difference =($target-$today) ;

//$days =(int) ($difference/3600) ;

print "My birthday will begin in $difference second";
*/
?>

<!doctype html public "-//w3c//dtd html 3.2//en">
<html>
    <head>
        <title>Birthday Countdown</title>

<?php
    //date_default_timezone_set('America/New_York');
//$birthday=mktime(0,0,0,1,1,2015);
$target =time()+10;
$total_sec_until_bd=$target-time();
?>

    <script type="text/javascript">
    function display_c (start){
        window.start = parseFloat(start);
        var end = 0; // change this to stop the counter at a higher value
        var refresh=1000; // Refresh rate in milli seconds
            if(window.start >= end ){
                mytime=setTimeout('display_ct()',refresh);
            }
            else 
            {
                alert("Time Over ");
            }
           
    }

    function display_ct() {
        // Calculate the number of days left
        var days=Math.floor(window.start / 86400);
        // After deducting the days calculate the number of hours left
        var hours = Math.floor((window.start - (days * 86400 ))/3600)
        // After days and hours , how many minutes are left
        var minutes = Math.floor((window.start - (days * 86400 ) - (hours *3600 ))/60)
        // Finally how many seconds left after removing days, hours and minutes.
        var secs = Math.floor((window.start - (days * 86400 ) - (hours *3600 ) - (minutes*60)))

        var x = days + " Days " + hours + " Hours " + minutes + " Minutes and " + secs + " Secondes ";


        document.getElementById('ct').innerHTML = x;
        window.start= window.start- 1;

        tt=display_c(window.start);
    }
    </script>
</head>

<?php

echo <<<END
<body onload="display_c($total_sec_until_bd)">   
END;

echo"<h1>Countdown Until --> ". date('Y / m / d',$target) ."</h1><span id='ct'></span>";

echo'</body>';

?>


</html>
