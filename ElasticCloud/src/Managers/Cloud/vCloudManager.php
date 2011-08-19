<?php
include_once 'src/Managers/Cloud/CloudManager.php';

class vCloudManager extends CloudManager {
	public function __construct($message){
		
	}
	public function createVM($vmtemplate) {}
	public function destroyVM($vmname) {}
	public function stopVM($vmname) {}
	public function startVM($vmname) {}
	public function getVMList($orgname, $vappname) {}
	public function getFreeIP($vappname) {}
}

?>