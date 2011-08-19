<?php
abstract class DataRetriever {
	abstract public function getCloudManager();
	abstract public function getHypervisorManager();
	abstract public function getBalancerManager();
	abstract public function loginStorage();
}
?>