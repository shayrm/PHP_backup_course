<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Picture collation
//==================================
//
echo "<h2 style=\"color:green\">Assignment of PHP course #8 Session number-3 16/07/14</h2>";
echo "<hr>";
echo "<h3 style=\"color:blue\"> generates a table that each cell should include an image,<br> randomly selected out of 5 possible images. </h3>";

$Ari_pic = array (
"<img src=\"http://www.redbullusa.com/cs/userfiles/file/Gee-Atherton-Drop-In.jpg\" height=\"200\" width=\"200\">",
"<img src=\"http://www.sicklines.com/wp-content/uploads/2013/10/Brandon-lip-Christian-Pondella-redbull-rampage.jpg\" height=\"200\" width=\"200\">",
"<img src=\"http://www.sicklines.com/wp-content/uploads/2013/10/Brandon-Semenuk-sequence-Ian-Hylands-1024x681.jpg\" height=\"200\" width=\"200\">",
"<img src=\"http://www.sicklines.com/wp-content/uploads/2013/10/Christian-Pondella-redbull-rampage-lacondedguy-1024x682.jpg\" height=\"200\" width=\"200\">",
"<img src=\"http://image1.redbull.com/rbcom/010/2013-11-25/1331621924241_2/0010/1/1500/1000/2/mountain-biker-mike-hopkins-drops-in-at-red-bull-rampage-2013.jpg\" height=\"200\" width=\"200\">",    
);        

echo "<table>The random table";
for ($i=0;$i<5;$i++){

    echo "
    <tr>
        <td>".$Ari_pic[mt_rand(0,4)]."</td>"
       ."<td>".$Ari_pic[mt_rand(0,4)]."</td>"
       ."<td>".$Ari_pic[mt_rand(0,4)]."</td>"
       ."<td>".$Ari_pic[mt_rand(0,4)]."</td>"
    ."</tr>";
           
}
echo "</table>";

?>
