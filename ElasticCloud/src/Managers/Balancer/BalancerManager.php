<?php
abstract class BalancerManager {
	abstract public function addIP($vs, $ip);
	abstract public function removeIP($vs, $ip);
}
?>