<?php

require_once 'dbconn.class.php';

class User {
	
	private $user_id;
	private $username;
	private $email;
	private $password;
	
	public function __construct($username, $email) {
		$this->username = $username;
		$this->email = $email;
	}
	
	public function setPassword($password) {
		$this->password = md5($password);
	}
	
	public function displayUserInfo() {
		return "<p>Username: $this->username</p><p>Email: $this->email</p>";
	}
	
	public function save() {
		$db = new DatabaseConnection();
		$db->establishConnection();
		$query = "INSERT INTO users (username, email, password) VALUES ('$this->username', '$this->email', '$this->password')";
		$result = $db->execute($query);
		if ($result == 0)
			return "Failed";
		else
			return "Success";
	}
	
}

?>