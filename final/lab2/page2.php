<?php
	$user_theme = null;
	if (isset($_COOKIE['theme'])) {
		$user_theme = $_COOKIE['theme'];
	} else {
		$user_theme = 'light';
	}
?>
<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<title>Page Title</title>
	<link rel='stylesheet' href='main.css'>
</head>
<body>
	<style>
		body {
			background-color: <?php echo $user_theme === 'light' ? "white" : "grey" ?>;
		}
	</style>
	<h1>this is page 2</h1>	
</body>
</html>