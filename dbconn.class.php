<?php

class DatabaseConnection{

	private $host = "localhost";
	private $user = "root";
	private $pass = "";
	private $link;
	
	public function establishConnection() {
		$this->link = new mysqli($this->host, $this->user, $this->pass, 'users');
	}
	
	public function execute($query) {
		$result = $this->link->query($query);
		return $this->link->affected_rows;
	}
	
	
}

?>