<?php 

	class db{

		public $host = "localhost";
		public $username = "root";
		public $password = "";
		public $database_name = "test";

		public $link;


		public function __construct(){
			$this->connect();
		}

		public function connect(){
			$this->link = new mysqli($this->host,$this->username, $this->password , $this->database_name);
		}

	}



 ?>