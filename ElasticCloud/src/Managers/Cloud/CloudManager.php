<?php
include_once 'src/Managers/Manager.php';

abstract class CloudManager extends Manager {
	abstract public function createVM($vmtemplate);
	abstract public function destroyVM($vmname);
	abstract public function stopVM($vmname);
	abstract public function startVM($vmname);
	abstract public function getVMList($orgname, $vappname);
	abstract public function getFreeIP($vappname);
}
?>