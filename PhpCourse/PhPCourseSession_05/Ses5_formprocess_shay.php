<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


if (!empty($_POST['username']) && !empty($_POST['password'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    
    echo "<br>user name is: $username";
    echo "<br>The passowd is: $password";
    if (!empty($_POST['Subscribe'])&& isset($_POST['Subscribe'])){
        
        $Subscribe=$_POST['Subscribe'];
        
        foreach ($Subscribe as $key=>$value){
          switch ($value){
            case "monthly_News":
                echo "<br>You have chosen to gett Monthly News";
                break;
                
            case "dailynewsletter":
                echo "<br>You have chosen to gett a daily news letter";
                break;
        }
       }   
    }
    
    if (!empty($_POST['payment'])&& isset($_POST['payment'])){
                
        $payment=$_POST['payment'];
        
        foreach ($payment as $key=>$value){
            switch ($value){
                case "visa":
                    echo "<br>you have chose to pay with $value";
                    break;
                case "paypal":
                    echo "<br>you have chose to pay with $value";
                    break;
                case "cash":
                    echo "<br>you have chose to pay with $value";
                    break;
            }
        }
        
    }
    
    if (!empty($_POST['city'])&& isset($_POST['city'])){
                
        $city=$_POST['city'];
        echo "<br>You are living in $city[0]";
        
            }
    if (!empty($_POST['colors'])&& isset($_POST['colors'])){
                
        $colors=$_POST['colors'];
        echo "<br> Your favorite coloers are: ";
        foreach ($colors as $key=>$value){
            echo "<p style=\"color:$value;\">$value,</p>";
            
        }
        
    }    
    
}


 else {
     echo "<script>
            function goBack() {
            window.history.back()
            }
            </script>
            <h2>you did not enter Username or passowrd, please do it again</h2>
            <button onclick=\"goBack()\">Go Back</button>";
    }
?>