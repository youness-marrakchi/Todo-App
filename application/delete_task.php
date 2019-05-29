<?php

### AUTHOR::YOUNESS.M ###
### GITHUB:: https://github.com/youness-marrakchi/ ###

include 'configure.php';

if(isset($_GET['delete'])) {

	try {
		$conn = new connection();
		$connection = $conn->Open();
		// task's id
		$theid = $_GET['delete'];

		if($connection) {
	        $sql = "DELETE FROM tasks WHERE id = $theid";
			$in = $connection->query($sql);

			header("location:../index.php");
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