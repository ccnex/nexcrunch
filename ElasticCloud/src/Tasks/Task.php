<?php

abstract class Task {
	public $userinfo;
	
	abstract public function run();
	abstract public function stop();
}
?>