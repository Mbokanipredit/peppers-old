<?php
session_start();
require_once('config/constants.php');
require_once('OAuth.php');

// Define the constants
define('PESAPAL_CONSUMER_KEY', 'YourConsumerKey'); // Use the consumer key provided by PesaPal
define('PESAPAL_CONSUMER_SECRET', 'YourConsumerSecret'); // Use the consumer secret provided by PesaPal
define('PESAPAL_CALLBACK_URL', 'http://localhost/peppers/payment_success.php'); // Replace with your success callback URL

// Collect the cart items and user information
$token = $params = NULL;
$consumer_key = PESAPAL_CONSUMER_KEY;
$consumer_secret = PESAPAL_CONSUMER_SECRET;
$signature_method = new OAuthSignatureMethod_HMAC_SHA1();
$iframelink = 'https://www.pesapal.com/API/PostPesapalDirectOrderV4';

$amount = 0;
$desc = 'Order Description';
$type = 'MERCHANT'; // default value = MERCHANT
$reference = uniqid(); // unique order id of the transaction, generated by your system
$first_name = 'First Name';
$last_name = 'Last Name';
$email = 'example@example.com';
$phonenumber = ''; // ONE of email or phonenumber is required

// Collect the cart items
$x=0;
$sql = "SELECT a.product_id,a.product_title,a.product_price,a.product_image,b.id,b.qty FROM products a,cart b WHERE a.product_id=b.p_id AND b.user_id='$_SESSION[uid]'";
$query = mysqli_query($con,$sql);
while($row=mysqli_fetch_array($query)){
    $x++;
    $amount += $row["product_price"] * $row["qty"];
}

// Format amount to 2 decimal places
$amount = number_format($amount, 2);

// Construct the post_xml string
$post_xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<PesapalDirectOrderInfo 
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" 
    xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" 
    Amount=\"$amount\" 
    Description=\"$desc\" 
    Type=\"$type\" 
    Reference=\"$reference\" 
    FirstName=\"$first_name\" 
    LastName=\"$last_name\" 
    Email=\"$email\" 
    PhoneNumber=\"$phonenumber\" 
    xmlns=\"http://www.pesapal.com\" />";

$post_xml = htmlentities($post_xml);

// Construct the OAuth request
$consumer = new OAuthConsumer($consumer_key, $consumer_secret);
$iframe_src = OAuthRequest::from_consumer_and_token($consumer, $token, "GET", $iframelink, $params);
$iframe_src->set_parameter("oauth_callback", PESAPAL_CALLBACK_URL);
$iframe_src->set_parameter("pesapal_request_data", $post_xml);
$iframe_src->sign_request($signature_method, $consumer, $token);

// Redirect the user to the PesaPal payment page
header('Location: ' . $iframe_src);
exit();
?>
