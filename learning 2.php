<?php

//basic class
class Customer{
public $id = 1;
public $name;
public $email;
public $balance;

	public function __construct(){
	echo "Start Here";
	}
	
	public function __destruct() {
	echo "End Here";
	}
	
public function getCustomer($id){
$this->id = $id;
	echo $id;
	echo '<br>';
return 'John DOe';
	

}

	
	
}

$customer = new Customer;

echo $customer -> id;
echo '<br>';
echo $customer -> getCustomer(12);



//extends

class Payer extends Customer{
	public $thePlan = "Pro";

	

}

$payer = new Payer;

echo $payer -> getCustomer(321);

//abstract
//only extend classes from it, it can't be used in its own.
