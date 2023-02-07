<?php
class Account{
	// Properties
	private $name;
  	private $balance;

  	// Methods
  	function __construct($name, $bal){
  		$this->name = $name;
  		$this->balance = $bal;
  		echo "{$this->name},your current balance is -> {$this->balance}";
  	}
  	function __destruct(){
  		echo "{$this->name},your current balance is -> {$this->balance}";
  	}
  	function get_name(){
    return $this->name;
  	}
  	function get_balance(){
    return $this->balance;
  	}
  	function deposit($amount){
  		$this->balance = $this->balance + $amount;
  	}
  	function withdraw($amount){
  		$this->balance = $this->balance - $amount;
  	}


}
$lena = new Account('Lena U.', 213.50);

echo "<hr>";

echo "deposit(23) -> ";
$lena->deposit(23);
echo $lena->get_balance()."<hr>";

echo "withdraw(210) -> ";
$lena->withdraw(210);
echo $lena->get_balance()."<hr>";

?>
