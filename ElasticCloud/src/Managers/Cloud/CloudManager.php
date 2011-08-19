<?php
abstract class CloudManager {
	public function createVM($vmtemplate) {}
	public function destroyVM($vmname) {}
	public function stopVM($vmname) {}
	public function startVM($vmname) {}
	public function getVMList($orgname, $vappname) {}
	public function getFreeIP($vappname) {}
}
?>