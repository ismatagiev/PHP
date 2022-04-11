<?php 
require_once "nflybehavior.php";

class Quack implements NFlyBehavior {
	public function quack1() {
		echo 'Я не умею летать!<br>';
	}
}