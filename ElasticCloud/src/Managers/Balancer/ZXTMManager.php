<?php
include_once 'src/Managers/Balancer/BalancerManager.php';

class ZXTMManager extends BalancerManager{
	public function __construct($message){
		
	}
	public function addIP($vs, $ip) {}
	public function removeIP($vs, $ip) {}
	public function isIPFree($vs, $ip) {
		return 0;
	}
}
?>