<?php
require_once "vendor/autoload.php";
 
use Omnipay\Omnipay;
 
define('CLIENT_ID', 'ATI80Ev7Ck-vE6IqLauGwGBx0BgTKnTg8OgL9LeU3_DvLUv-YQl-bXq66yoUh9MNIvk3nR83oXmK9RER');
define('CLIENT_SECRET', 'EMf0qx0n1LOKReoYYCvG2YBsJC6MCTOAZ7dY1lDfxUUaQMPCUATQfX4x6TaXV0wVtNv8xNy7dgwt9dAw');
 
define('PAYPAL_RETURN_URL', 'http://onfeet1.herokuapp.com/paypal/success.php');
define('PAYPAL_CANCEL_URL', 'http://onfeet1.herokuapp.com/paypal/cancel.php');
define('PAYPAL_CURRENCY', 'USD'); // set your currency here
 
// Connect with the database
$db = new mysqli('b9vhkvkdciiu9cytfoca-mysql.services.clever-cloud.com', 'upwqaxpjlpxnkc9p', 'MW2Rk8rWo94BtmxNeynH', 'b9vhkvkdciiu9cytfoca'); 
 
if ($db->connect_errno) {
    die("Connect failed: ". $db->connect_error);
}
 
$gateway = Omnipay::create('PayPal_Rest');
$gateway->setClientId(CLIENT_ID);
$gateway->setSecret(CLIENT_SECRET);
$gateway->setTestMode(true); //set it to 'false' when go live
?>
