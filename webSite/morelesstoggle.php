<?php
	
	ini_set('display_errors', '1');
	ini_set('display_startup_errors', '1');
	error_reporting(E_ALL);
	include('connection.php');

	if (isset($_POST['submit']) ){

		$input_text = $_POST['input_text'];

	    $stmt = $myConn->prepare("INSERT INTO `get_data` (`msg`) 
	    						  VALUES (:input_text)");
	    $stmt->bindParam(':input_text', $input_text);

	    $finalcheck = $stmt->execute();

	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>show more show less </title>
</head>
<body>
	<form method="POST" action="">
		<input type="text" name="input_text">
		<button type="submit" name="submit"> Insert </button>
	</form>
</body>
</html>