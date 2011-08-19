<?php
include_once 'src/Managers/Manager.php';

abstract class BalancerManager extends Manager {
	abstract public function addIP($vs, $ip);
	abstract public function removeIP($vs, $ip);
}
?>