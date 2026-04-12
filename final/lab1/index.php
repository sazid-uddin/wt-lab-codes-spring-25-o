<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$error = [];
	echo "validation code running";

	$fullname = $_POST["fullname"];
	$email = $_POST["email"];
	$username = $_POST["username"];
	$password = $_POST["pass"];

	//validation logic
	// Rule 1: fullname has to be at least 3 chars long
	if (strlen($fullname) < 3) {
		// echo "Fullname is too short";
		$error["fullname"] = "Fullname is too short";
	}

	// Rule 2: username has to be at least 3 chars long
	if (strlen($username) < 3) {
		// echo "Username is too short";
		$error["username"] = "Username is too short";
	}

	// Rule 3: 

	// DB insert user account
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
	<form method="post" action="index.php">
		<label for="fullname">Fullname:</label>
		<input type="text" id="fullname" name="fullname" value="<?php echo $fullname ?>">
		<?php if (!empty($error["fullname"])) echo $error["fullname"]; ?>
		<br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" value="<?php echo $email ?>">
		<br>
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" value="<?php echo $username ?>">
		<?php if (!empty($error["username"])) echo $error["username"]; ?>
		<br>
		<label for="pass">Pass:</label>
		<input type="password" id="pass" name="pass">
		<br>
		<br>
		<input type="submit">
	</form>	
</body>
</html>