<?php

Class Database{
 
	private $server = "mysql:host=localhost;dbname=tracemm";
	private $username = "root";
	private $password = "";
	private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
	protected $conn;
 	
	public function open(){
 		try{
 			$this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
 			return $this->conn;
 		}
 		catch (PDOException $e){
 			echo "There is some problem in connection: " . $e->getMessage();
 		}
 
    }
 
	public function close(){
   		$this->conn = null;
 	}
 
}

$pdo = new Database();
 




// $host = "localhost";
// $user = "root";
// $password = "";
// $db = "tracemm";

// $conn = mysqli_connect($host, $user, $password, $db);

// if(!$conn){
//     echo "error connecting to the database";
// }
// else{

// }