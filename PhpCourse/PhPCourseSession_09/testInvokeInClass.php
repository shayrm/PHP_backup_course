<?php
class Account
{
    private $id;
    private $balance;
    
    function __construct($idVal,$balanceVal)
    {
        $this->setId($idVal);
        $this->setBalance($balanceVal);
    }
    
    function setId($num)
    {
        if($num>0)
        {
            $this->id = $num;
        }
    }
    
    function setBalance($sum)
    {
        $this->balance = $sum;
    }
    
    function deposit($sum)
    {
        $this->balance += $sum;
    }
    
    function __invoke($sum)
    {
        $this->deposit($sum);
    }
    
    function __toString()
    {
        return "[id=$this->id balance=$this->balance]";
    }
  }
  
  class Utils
  {
      static function transfer($sum,$from,$to)
      {
          $from(-$sum);
          $to($sum);
      }
  }
  
  $accountA = new Account(1,200);
  $accountB = new Account(2,300);
  
  echo "<br>$accountA $accountB";
  Utils::transfer(50,$accountA,$accountB);
  echo "<br>$accountA $accountB";
  