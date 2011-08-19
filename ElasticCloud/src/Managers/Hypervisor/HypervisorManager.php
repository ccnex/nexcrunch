<?php
include_once 'src/Managers/Manager.php';

abstract class HypervisorManager extends Manager {
	abstract public function getVMPerformance($vmname);
}
?>