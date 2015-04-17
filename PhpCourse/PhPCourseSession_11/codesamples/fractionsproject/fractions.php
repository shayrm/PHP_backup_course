<?php
class FractionDivideByZeroException extends Exception
{
	function __construct($str)
	{
		parent::__construct($str);
	}
}



class Fraction
{
	private $numerator;
	private $denominator;
	function __construct($numer,$denomi)
	{
		$this->setNumerator($numer);
		$this->setDenominator($denomi);
	}
	function setNumerator($number)
	{
		$this->numerator = $number;
	}
	function setDenominator($number)
	{
		if($number!=0)
		{
			$this->denominator = $number;
		}
		else
		{
			throw new FractionDivideByZeroException("denominator cannot be 0");
		}
	}
	function __toString()
	{
		return $this->numerator."/".$this->denominator;
	}
	static function divide(Fraction $a, Fraction $b)
	{
		if($b->numerator==0)
		{
			throw new FractionDivideByZeroException("the numerator of the fraction you divide by cannot be 0!");
		}
		return new Fraction($a->numerator*$b->denominator,$a->denominator*$b->numerator);
	}
}



try
{
	$a = new Fraction(3,4);
	$b = new Fraction(5,2);
	$c = new Fraction(0,2);		
	echo "<br>a=".$a."<br>";
	echo "<br>b=".$b."<br>";
	echo "<br>c=".$c."<br>";
	echo "<br>a/b=".Fraction::divide($a,$b)."<br>";
	echo "<br>a/c=".Fraction::divide($a,$c)."<br>"; 	

}
catch(FractionDivideByZeroException $e)
{
	echo $e->getMessage();	
}

