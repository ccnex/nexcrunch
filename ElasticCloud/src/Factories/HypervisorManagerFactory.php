<?php
include_once 'src/Managers/Hypervisor/vCenterManager.php';

class HypervisorManagerFactory {
	public function __construct($message){
		
	}
	public function getHypervisorManagerOfType($type) {
		//Type == vcenter?? de momento nos la suda xD
		$manager = new vCenterManager(0);
		return $manager;
	}
}
?>