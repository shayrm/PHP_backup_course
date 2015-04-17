
<!DOCTYPE html>
<html>
    <head>
        <script>
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("Text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("Text");
    ev.target.appendChild(document.getElementById(data));
}
        </script>
    </head>
<body>

<div id="container_copy1" ondrop="drop(event)" ondragover="allowDrop(event)" style="background-color:#ffff33;height:200px;width:800px;float:right;">
    </div>

    <div id="container_copy2" ondrop="drop(event)" ondragover="allowDrop(event)" style="background-color:#5E90B6;height:200px;width:800px;float:right;">
    </div>

    
</body>
</html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "<h2 style=\"color:green\">Assignment of PHP course #8 Session number-3 16/07/14</h2>";
echo "<hr>";
echo "<h3 style=\"color:blue\"> generates an XHTML page that shows 10 draggable cubes on the screen,"
. "<br> Each draggable cube should be in a different size and in a different color. </h3>";



/*
 * PHP script that generates an XHTML page that shows 10 draggable cubes on the screen. 
 * Each draggable cube should be in a different size and in a different color. 
 * Both the colors and the sizes should be randomized selected.
 */

function Rand_Size (){
        $A_width=rand(20,60);
        $A_high=rand(20,60);
        return array($A_width, $A_high);
}

function Rand_color (){
     return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
}

for ($i=1;$i<=10; $i++){
$size= Rand_Size();
$col= Rand_color();
echo "<div id=\"content$i\"  draggable=\"true\" ondragstart=\"drag(event)\" style=\"background-color:$col; height:$size[1]px; width:$size[0]px;float:right;\">
            Box $i
</div>";
}

?>
