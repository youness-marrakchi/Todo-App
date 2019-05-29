<?php 

### AUTHOR::YOUNESS.M ###
### GITHUB:: https://github.com/youness-marrakchi/ ###

include 'application/configure.php';

try {
$conn = new Connection();
$connect = $conn->Open();

if($connect) {

	$sql = "SELECT * FROM tasks ORDER BY time" or die(mysql_error());
	$re = $connect->query($sql);
	if($re->fetchColumn() > 0) {
		$text = '<p class="lead" style="font-size: 2rem;">All Tasks</p>';
		while($row = $re->fetch(PDO::FETCH_ASSOC)) {
			$id = $row['id'];
			$name = $row['taskname'];
			$description = $row['description'];

			echo "
				<div class='card'>
					<div class='card-body'>
						<form method='GET' action='application/delete_task.php?' >
						<button type='submit' name='delete' value='$id' class='btn btn-danger float-right'>Delete</button>
						</form>
	    				<blockquote class='blockquote mb-0'>
	      					<p>$name</p>
	      					<footer class='blockquote-footer'><cite title='Source Title'>$description</cite></footer>
	    				</blockquote>
	  				</div>
				</div>
			";
		}

	} else {
		$text = '<p class="lead" style="font-size: 2rem;"></p>';
		echo "
		<br><br>
		<div class='card'>
			<div class='card-body'>
	    		<blockquote class='blockquote mb-0'>
	      			<footer class='blockquote-footer'><cite title='Source Title'>Nothing found</cite></footer>
	    		</blockquote>
	  		</div>
		</div>
		";
	}

} else {
	header("location: index.php?signup=error");
}

} catch(PDOException $ex) {
	echo $ex->getMessage();
}
?>