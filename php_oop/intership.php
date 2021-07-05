<?php
class Customer{
	var $name;
	var $address;
	var $affiliat;

	function placeOrder(){
		
	}	
}

class Order{
	var $total;
}

class Affiliate{
	var $name; 
	var $balance
	var $upperAffiliate
	var $subAffiliates 
	var $customers

	function refer(){

	}
	function withdraw(){
		
	}
	function printSubAff(){
		
	}
	function printCustomers(){
		
	}
}

class StoreOwner{
	var $name; 
	var $balance

	function printBalance(){

	}
	
}
?>