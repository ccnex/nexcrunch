<?php
include_once 'src/Managers/Manager.php';
abstract class DataRetriever extends Manager{
	abstract public function getCloudManager();
	abstract public function getHypervisorManager();
	abstract public function getBalancerManager();
	abstract public function loginStorage();
}
?>