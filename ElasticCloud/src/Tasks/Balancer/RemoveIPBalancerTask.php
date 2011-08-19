<?php

include_once 'src/Tasks/Balancer/BalancerTask.php';

class RemoveIPBalancerTask extends BalancerTask{
	public function __construct($message){
		
	}
	function run() {
		return 0;
	}
	function stop() {
		return 0;
	}
}
?>