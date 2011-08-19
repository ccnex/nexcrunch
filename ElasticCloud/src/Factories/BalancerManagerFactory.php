<?php
include_once 'src/Managers/Balancer/ZXTMManager.php';

class BalancerManagerFactory {
	public function __construct($message){
		
	}
	public function getBalancerManagerOfType($type) {
		//Type == vcenter?? de momento nos la suda xD
		$manager = new ZXTMManager(0);
		return $manager;
	}
}
?>