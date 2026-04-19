<?php
	session_start();
	$username = "";
	// first, check if session exists
	if (isset($_SESSION['username']) && isset($_SESSION['login_time'])) {
		// session exists / user is logged in

		// only admin can access
		if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
			// grant access
			$username = $_SESSION['username'];
		} else {
			header('Location: home.php');
		}
	} else {
		// user is not logged in
		header('Location: login.php');
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
	<h1>Welcome to admin panel, <?php echo $username; ?></h1>	
</body>
</html>