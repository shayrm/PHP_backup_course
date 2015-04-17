<?php


/*Declare a class that describes a bank account. 
 * 
 *The class should include the following fields (instance variables):
 *- balance: double
 *- id: long
 * and it should also include the following two methods:
 * 
 * + deposit(double): void
 * + withdraw(double): void
 * 
 * Check the class you declared by instantiating it and calling the deposit and the withdraw methods. 
 * You can declare additional variables, methods & constructors.
 */

class bankAccount {
    var $balance;
    var $id;
    var $name;
    
    function __construct($balanceIN,$idIN,$nameIN){
        $this->balance=$balanceIN;
        $this->id=$idIN;
        $this->name=$nameIN;
        
    }
    
    function deposit ($dep){
        return $this->balance+=$dep;
                
    }
    
    function withdraw ($with){
        return $this->balance-=$with;
    }
}

$balanceIN=100;
$idIN="027108992";
$nameIN="Shay";

$obj1= new 4bankAccount($balanceIN, $idIN, $nameIN);

echo "<br>In the account-> <br>Name: $obj1->name, with ID: $obj1->id";
echo "<br> There is a balance of $obj1->balance";
echo "<hr>";

$dep1=$obj1->deposit(100);
echo "<br>I made a deposite of 100 and now my account balance is $dep1";

$dep2=$obj1->deposit(50);
echo "<br>I made a deposite of 50 and now my account balance is $dep2";

$red1 =$obj1->withdraw(200);
echo "<br>I made a withraw of 200 and now my account balance is $red1";

