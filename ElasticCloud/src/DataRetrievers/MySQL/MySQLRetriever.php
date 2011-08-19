<?php
include_once 'src/DataRetrievers/DataRetriever.php';

class MySQLRetriever extends DataRetriever {
	public function __construct($message){
		
	}
	public function getCloudManager() {}
	public function getHypervisorManager() {}
	public function getBalancerManager() {}
	public function loginStorage() {}
}
?>