<?php
/*
 * Define the Account,Customer and Person classes.
 * The first describes a checking account in a bank. The second describes a customer. The third describes a person.
 * One of the attributes the Account class should include is customer.
 * The customer attribute should hold the reference for the Customer object that describes the account owner.
 * The Account class should include (at the minimum) the following attributes:
 * id, customer, balance and branch_id.
 *
 * The Account class should include one detailed constructor with parameters that describe all attributes.
 * Each one of the attributes should have a set/get method.
 * The Customer class should extend Person.
 * You are free to choose which attributes, operations and constructors each of these classes should include.
 *
 * All classes should include the definition for the __toString() method.
 * The __toString() you define in Account should use the __toString() defined in Customer.
 * The __toString() defined in Customer should use the __toString() defined in Person.
 *
 * Develop a small script that describes your account and prints out its details to the screen.
 * Your script should instantiate the Account and the Customer classes with your details.
 * The output should be based on calling the the __toString() method on the account object.
 *
 */
class Person
{

    var $gander;
    var $countery;

    function setGander($varGander)
    {
        if ($varGander=="F" || $varGander=="M"){
            
        $this->gander = $varGander;
        }
    }

    function setCountry($varCountry)
    {
        $this->countery = $varCountry;
    }

    function __construct($varGander, $varCountry)
    {
        $this->setGander($varGander);
        $this->setCountry($varCountry);
    }

    function getGander()
    {
        return $this->gander;
    }

    function getCountry()
    {
        return $this->countery;
    }

    function __toString()
    {
        echo "<br> The details of this persons are:";
        echo "<br> The Gander is: " . $this->getGander();
        echo "<br> The Countery is:" . $this->getCountry();
        echo "<hr />";
    }
}

class Customer extends Person
{

    var $name;    
    var $age;
    private $craditScore;

    /**
     * @return the $craditScore
     */
    public function getCraditScore()
    {
        return $this->craditScore;
    }

	/**
     * @param field_type $craditScore
     */
    public function setCraditScore($craditScore)
    {
        $this->craditScore = $craditScore;
    }

	function setName($varName)
    {
        $this->name = $varName;
    }

    function setAge($varAge)
    {
        $this->age = $varAge;
    }

    function getName()
    {
        return $this->name;
    }

    function getAge()
    {
        return $this->age;
    }

    function __construct($varGander,$varCountry,$varName, $varAge, $varCraditScore)
    {
        parent::__construct($varGander, $varCountry);
        $this->setName($varName);
        $this->setAge($varAge);
        $this->setCraditScore($varCraditScore);
        
    }

    function __toString()
    {
        parent::__toString();
        echo "<br>Customer information:";
        echo "<br>Customer Name: " . $this->getName;
        echo "<br> Customer Age: " . $this->getAge();
    }
}

class Account
{

    private $id;

    private $Customer;

    private $balance;

    private $branchId;

    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

	/**
     * @return the $Customer
     */
    public function getCustomer()
    {
        return $this->Customer;
    }

	/**
     * @param field_type $Customer
     */
    public function setCustomer($Customer)
    {
        $this->Customer = $Customer;
    }

	/**
     * @param field_type $branchId
     */
    public function setBranchId($branchId)
    {
        $this->branchId = $branchId;
    }

	function setId($varId)
    {
        if ($varId > 0) {
            $this->id = $varId;
        }
    }

    function setBalance($varBalance)
    {
        $this->balance = $varBalance;
    }

    function setBranch_id($varBranch_id)
    {
        $this->branchId;
    }

    function __construct($varID,$varCustomer,$varBalance,$varBranchID)
    {
        $this->setId($varID);
        $this->setCustomer($varCustomer);
        $this->setBalance($varBalance);
        $this->setBranchId($varBranchID);
    }

    function getID()
    {
        return $this->id;
    }

    function getBalance()
    {
        return $this->balance;
    }

    function getBranchId()
    {
        return $this->branchId;
    }

    function deposit($sum)
    {
        $this->balance += $sum;
    }

    function withdrow($sum)
    {
        $this->balance -= $sum;
    }
}

$newCustomer = new Customer("M", "Israel", "Moshe", "32", 1980);
$newAccount = new Account(999, $newCustomer, 1000, 800);

