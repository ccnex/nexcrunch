<?php
// Balancer Tasks
include_once 'src/Tasks/Balancer/AddIPBalacenerTask.php';
include_once 'src/Tasks/Balancer/RemoveIPBalancerTask.php';

//Hypervisor Tasks

//CloudTasks
include_once 'src/Tasks/Cloud/CleanCreateVMCloudTask.php';
include_once 'src/Tasks/Cloud/CleanDestroyVMCloudTask.php';
include_once 'src/Tasks/Cloud/CreateVMCloudTask.php';
include_once 'src/Tasks/Cloud/DestroyVMCloudTask.php';
include_once 'src/Tasks/Cloud/StartVMCloudTask.php';
include_once 'src/Tasks/Cloud/StopVMCloudTask.php';
?>