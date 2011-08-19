<?php
include_once 'src/Managers/Hypervisor/HypervisorManager.php';

class vCenterManager extends HypervisorManager{
	public function __construct($message){
		
	}
	public function getVMPerformance($vmname) {
		return 0;
	}
}
?>