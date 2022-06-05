<?php
require_once "vendor/autoload.php";
 
use Omnipay\Omnipay;
 
define('CLIENT_ID', 'ASdY_mD911sEqnbrFzcnavTMQqcScWEyca6XKTi-nfDfnG6UpyyZHEPizJxmb5EYGdlPBkDHQET_8O4X');
define('CLIENT_SECRET', 'EMCwubZXW5Cr-8KVET4VZKAXgDyE9W0XNWxi4ea-GrO3Pjg--keB_4oynm24ARQw3s3NMHiD-Z0MSYz7');
 
define('PAYPAL_RETURN_URL', 'http://localhost/PaymentProj/success.php');
define('PAYPAL_CANCEL_URL', 'http://localhost/PaymentProj/cancel.php');
define('PAYPAL_CURRENCY', 'USD'); // set your currency here
 
// Connect with the database
$db = new mysqli('localhost', 'root', '', 'paypal'); 
 
if ($db->connect_errno) {
    die("Connect failed: ". $db->connect_error);
}
 
$gateway = Omnipay::create('PayPal_Rest');
$gateway->setClientId(CLIENT_ID);
$gateway->setSecret(CLIENT_SECRET);
$gateway->setTestMode(true); //set it to 'false' when go live
?>