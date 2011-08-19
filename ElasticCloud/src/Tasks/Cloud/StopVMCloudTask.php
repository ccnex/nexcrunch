<?php
include_once 'src/Tasks/Cloud/CloudTask.php';

class StopVMCloudTask extends CloudTask{
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