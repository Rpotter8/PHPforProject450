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
		$pass = $_POST['password'];


		$select = "SELECT pwd FROM User WHERE username = $name";
		$user_query = $db->query($select_sql);
		$users = $user_query->fetchAll(PDO::FETCH_ASSOC);

		$tempPass

		while($row = mysql_fetch_array($users, MYSQL_ASSOC)) {
			$tempPass = $row["pwd"]

		}

		$db = null;

		if($tempPass == $pass) {}
			$succ = "true";
		}
	}


	} catch (PDOException $e) {
		$error_message = $e->getMessage();
		echo 'There was an error connecting to the database.';
		echo $error_message;
		exit();
	}

	print succ;
?>
