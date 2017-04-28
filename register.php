<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);


	//Connect to the Database
	$dsn = 'mysql:host=cssgate.insttech.washington.edu;dbname=rjp24';
	$username = 'rjp24';
	$password = 'cructid';


	try {

		$db = new PDO($dsn, $username, $password);
		$name = $_GET['user'];

		$select_sql = "SELECT username, pwd FROM User WHERE username = '$name';";

		$user_query = $db->query($select_sql);

		$users = $user_query->fetchAll(PDO::FETCH_ASSOC);
		if ($users) {
			print json_encode($users);
		}
		$db = null;
	} catch (PDOException $e) {
		$error_message = $e->getMessage();
		echo 'There was an error connecting to the database.';
		echo $error_message;
		exit();
	}


?>
