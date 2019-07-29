<?php  
	require 'paypal/autoload.php';

	define('URL_SITIO', 'http://localhost/proyecto-conferencias');

	$apiContext =  new \PayPal\Rest\ApiContext(
		new \PayPal\Auth\OAuthTokenCredential(
			'AXMV-CH_Aa8aL9wh3YLUjgjjbTdXtkEBvjrvJnBz13JGiRFyamHARFuMifdUYqQx2lQDZIoHMZLFixPA',//cliente ID
			'EA8sLI2s9D2KycbbGmbN5K4mBdSGiuq_LK70dBI7m8rw7KDIxxbfNlhYPoz6Z3mXZ2ovpGaG_prhz0H5'//Secret
		)
	);


?>