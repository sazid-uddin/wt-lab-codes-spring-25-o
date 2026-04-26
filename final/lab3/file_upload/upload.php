<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		// var_dump($_FILES);
		// print_r($_FILES['myFile']);
		echo $_FILES['myFile']['name'];
		echo "<br>";
		echo $_FILES['myFile']['size'];
		echo "<br>";
		echo $_FILES['myFile']['type'];
		echo "<br>";
		echo $_FILES['myFile']['tmp_name'];
		echo "<br>";

		$target_dir = 'uploads/';
		// uploads/original_name.html
		$target_file_name = $_FILES['myFile']['name'];
		echo $target_file_name;
		echo "<br>";
		$target_file = $target_dir . $target_file_name; // uploads/original_filename.html
		echo $target_file;
		echo "<br>";

		$target_file_extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
		echo $target_file_extension;
		echo "<br>";

		// file type validation
		$allowed_types = ['png', 'jpg', 'jpeg'];
		if (in_array($target_file_extension, $allowed_types)) {
			// file size validation
			$MAX_ALLOWED_SIZE = 2*1024; //in bytes
			$target_file_size = $_FILES['myFile']['size'];

			if ($target_file_size <= $MAX_ALLOWED_SIZE) {
				// allow upload
				$temp_file = $_FILES['myFile']['tmp_name'];
				if (move_uploaded_file($temp_file, $target_file)) {
					echo "File uploaded to uploads folder";
				} else {
					echo "File upload failed";
				}
			} else {
				echo "File is too big";
			}
		} else {
			echo "File type not allowed";
		}

	}
?>