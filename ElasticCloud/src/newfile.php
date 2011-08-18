<?php
include_once 'VMware/VCloud/Helper.php';

$server = '10.50.0.213';

// login URL, optional, can be used if you invoke setLoginUrl()
//$loginUrl = "https://$server/api/v1.0/login";

// User name for login request, in the form user@organization
// System administrator must log in as a member of the System organization
$user = 'vcloudsu@system';

// Password for user
$pswd = 'IDnnANV7Y9JKaRjvvyLsCjTwOIwra-kf';

// proxy host, optional
$phost = null;

// proxy port, optional
$pport = null;

// proxy username, optional
$puser = null;

// proxy password, optional
$ppswd = null;

// CA certificate file name with full directory path. To turn on certification
// verification, set ssl_verify_peer to true in the $httpConfig parameter.
$cert = null;

/**
 * Create $httpConfig as HTTP connection parameters used by HTTP_Request2
 * library. Please refer to HTTP_Request2 documentation $config variable
 * for details.
 */
$httpConfig = array('proxy_host'=>$phost,
                    'proxy_port'=>$pport,
                    'proxy_user'=>$puser,
                    'proxy_password'=>$ppswd,
                    'ssl_verify_peer'=>false,
                    'ssl_verify_host'=>false,
                    'ssl_cafile' => $cert
                   );

$auth = array('username'=>$user, 'password'=>$pswd);

try
{
    // create a service object
    $service = VMware_VCloud_SDK_Service::getService();
    // login to the service portal,
    $response = $service->login($server, $auth, $httpConfig);
    // returns response body on login successfully
    echo $response->export();
    // log out
    $service->logout();
    echo "logged out.\n";
}
catch (Exception $e)
{
    echo $e->getMessage() . "\n";
}

?>