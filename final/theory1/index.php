<?php
	$i = 5; // int
	$f = 5.2; // float
	$str = "Hello world";
	$bool = true;
	// $a = [1,2,3];
	$a = array(1,2,3,4,5, "str", true, ["a", "b"]);

	// print variables' value
	echo $i;
	echo "<br>";
	echo $f;
	echo "<br>";
	echo $str;
	echo "<br>";
	echo $bool;
	echo "<br>";
	echo $a;
	echo "<br>";

	//var_dump()
	var_dump($i);
	echo "<br>";
	var_dump($f);
	echo "<br>";
	var_dump($str);
	echo "<br>";
	var_dump($bool);
	echo "<br>";
	var_dump($a);

	$student = array("name"=>"Abc", "id"=>123, "cgpa"=>3.5);

	foreach ($student as $key=>$value) {
		// echo "Student's " . $key . " is " . $value . "<br>";
		echo $key;
		echo $value;
	}

	$numbers = [5,10,15,20];

	// for ($i=0;$i<4;$i++) {
	// 	echo $numbers[$i] . "<br>";
	// }

	foreach ($numbers as $value) {
		echo $value . "<br>";
	}

	$age=array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

	foreach ($age as $name=>$age){
		echo $name . " is " . $age . " years old <br>";
	}
?>