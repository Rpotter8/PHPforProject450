<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);


	//Connect to the Database
	$dsn = 'mysql:host=cssgate.insttech.washington.edu;dbname=rjp24';
	$username = 'rjp24';
	$password = 'cructid';

	$succ = "false";

	try {

		$db = new PDO($dsn, $username, $password);
		$name = $_POST['user'];
		$pass1 = $_POST['password1'];
		$pass2 = $_POST['password2'];

		if ($pass1 == $pass2) {
			$insert_sql = "INSERT INTO User VALUES ('$name', '$pass');";
			$user_insert = $db->query($insert_sql);
			$db = null;
			$succ = "true";
		}


	} catch (PDOException $e) {
		$error_message = $e->getMessage();
		echo 'There was an error connecting to the database.';
		echo $error_message;
		exit();
	}

	print succ;
?>
