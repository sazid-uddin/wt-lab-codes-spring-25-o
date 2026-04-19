<?php
	// get user theme setting from cookie, if exists
	$user_theme = null;
	if (isset($_COOKIE['theme'])) {
		$user_theme = $_COOKIE['theme'];
	}

	// set user theme when form is submitted/change theme button is pressed
	if ($_SERVER["REQUEST_METHOD"] === 'POST') {
		$new_theme = null;
		if ($user_theme === null || $user_theme === 'light') {
			$new_theme = 'dark';
		} else if ($user_theme === 'dark') {
			$new_theme = 'light';
		}
		$cookie_name = 'theme';
		setcookie($cookie_name, $new_theme, time() + (30*24*60*60), "/", "localhost", false, false);
		header('Location: ' . $_SERVER['PHP_SELF']);
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
	<h1>Current Theme: <?php echo $user_theme ?></h1>
	<a href="page2.php">Go to page 2</a>
	<form method="post" action="page1.php">
		<input type="submit" value="Change Theme">
	</form>
</body>
</html>