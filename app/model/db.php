<?php 



class Database
{
	public $server			= 'localhost';
	public $username		= 'root';
	public $password		= 'admin';
	public $database		= 'mvc';
	public $conn;



	public function __construct()
	{
		$this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);
	
		if ($this->conn->connect_error) {
			die('Error'.$this->conn->connect_error);
		}
		// var_dump($this->conn);

	}
}