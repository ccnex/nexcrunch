<?php
include_once 'src/Managers/Cloud/vCloudManager.php';

class CloudManagerFactory {
	public function __construct($message){
		
	}
	public function getCloudManagerOfType($type) {
		//Type == vcenter?? de momento nos la suda xD
		$manager = new vCloudManager(0);
		return $manager;
	}
}
?>