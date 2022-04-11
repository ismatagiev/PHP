<?php 
require_once 'flybehavior.php';

abstract class Duck {
	public $flyBehavior;

	abstract public function display();
	public function performFly() {
		$this->flyBehavior->fly();
	}
	public function swim() {
		echo 'Все утки умеют плавать, даже деревянные<br>';
	}
}
?>