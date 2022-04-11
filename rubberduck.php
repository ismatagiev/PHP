<?php 
  require_once 'duck.php';
  require_once 'quack.php';

  class RubberDuck extends Duck {
       public function __construct() {
		$this->nflyBehavior = new Quack();
	}
	public function display(){
		echo 'КРЯК!.<br>';
	}
  }
?>