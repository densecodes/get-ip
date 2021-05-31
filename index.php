<!DOCTYPE html>
<html>
<head>
	<title>Get Visitor IP Address In PHP</title>
	<?php
		$ch=curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://ip-api.com/json");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$visitor=curl_exec($ch);
		$visitor=json_decode($visitor);
	?>
</head>
<body>
	<h1>Your IP is <?php echo "$visitor->query"; ?></h1>
</body>
</html>