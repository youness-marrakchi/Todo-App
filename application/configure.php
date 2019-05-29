<?php


### AUTHOR::YOUNESS.M ###
### GITHUB:: https://github.com/youness-marrakchi/ ###


// creating a class
class connection {

	protected $db = null;

	public function Open() {
		try {
			/* change the following credentials:
				host : it actually depends on your local server .
				dbname : you can name your database whatever you want .
				user : make sure to check your server/documentation for the username .
				password : fill in the blank in case you're using a password .
			*/
			$dsn = "mysql:host=localhost; dbname=TodoList"; 
			$user = "root"; 
			$password = "";
			// setting up the error and fetch mode on run time to save time and effort .
			// that way i wouldn't have to worry about writing them in every sql query .
			$options = [
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			];
			// creating a connection and returning it .
			$this->db = new PDO($dsn, $user, $password, $options);
			return $this->db;

		} catch(PDOException $e) {
			echo "Connection Failed : " . $e->getMessage();
		}
	}
	public function Close() {
		$this->db = null;
		return true;
	}
}

?>