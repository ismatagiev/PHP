<?php 
require_once 'flybehavior.php';
require_once 'nflybehavior.php';

abstract class Duck {
	public $flyBehavior;

	abstract public function display();
	public function performFly() {
		$this->flyBehavior->fly();
	}
	public function swim() {
		echo 'Все утки умеют плавать, даже деревянные<br>';
	}
	public function quack1(){
		echo '*Резиновые утки не разговаривают*<br>';
		echo '*Резиновые умеют плавать, но не умеют крякать*<br>';
		echo '*Резиновые утки не живые!!*<br>';

	}

}
?>