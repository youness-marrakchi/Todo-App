<?php

### AUTHOR::YOUNESS.M ###
### GITHUB:: https://github.com/youness-marrakchi/ ###

include 'configure.php';

if(isset($_POST['add'])) {

	try {
		// connecting to the server through configure.php
		$conn = new connection();
		$connection = $conn->Open();

		if($connection) {

			// catching data through the form
			$name = $_POST['theTask'];
			$note = $_POST['description'];

			if(!empty($name)) {

				$sql = "INSERT INTO `tasks`(`id`, `taskname`, `description`) VALUES ('','$name', '$note')";
				$in = $connection->query($sql);
				header("location:../index.php");

			} else {
				echo "error";
				exit();
			}

		} else {
			echo $connection;
		}

	} catch(PDOException $ex) {
		echo $ex->getMessage();
	}

} else {
	header("location: ../index.php");
	exit();
}


?>