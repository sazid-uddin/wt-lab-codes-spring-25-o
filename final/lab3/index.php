<?php
	// read mode
	// $myFile = fopen("web.txt", "r") or die("Unable to open web.txt");
	// $myFileSize = filesize("web.txt");
	// echo fread($myFile, $myFileSize);
	// fclose($myFile);

	// write mode
	// $myFile = fopen("web.txt", "w") or die("Unable to open web.txt");
	// $content = "Test line 1\nTest line 2\n";
	// fwrite($myFile, $content);
	// fclose($myFile);

	// append mode
	// $myFile = fopen("web.txt", "a") or die("Unable to open web.txt");
	// $content = "Test line 3\nTest line 4\n";
	// fwrite($myFile, $content);
	// fclose($myFile);

	// create mode
	$myFile = fopen("web2.txt", "x") or die("Unable to create web.txt");
	$content = "Test line 3\nTest line 4\n";
	fwrite($myFile, $content);
	fclose($myFile);
?>