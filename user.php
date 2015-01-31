<?php


define('FACEBOOK_SDK_V4_SRC_DIR', '/facebook-php-sdk-v4-4.0-dev/src/Facebook/');
require __DIR__ . '/facebook-php-sdk-v4-4.0-dev/autoload.php';

use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;

FacebookSession::setDefaultApplication('342504839278231','2a43602eaa0faef736081ea6ab0d30e6');


$helper = new FacebookRedirectLoginHelper('google.com');
$loginUrl = $helper->getLoginUrl();
echo <<<_END
	<html>
	<head>
	<title>login_page</title>
	</head>
	<body>
		
		<a href=$loginUrl>sing up?</a>
	</body>
	</html>
_END;
?>
