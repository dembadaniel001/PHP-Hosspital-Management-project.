<?php
       class database{
		   public $conn;
		   
		   function connect(){
			   $this->conn = new MySQLi('localhost:3308', 'root','7205','monaowano');	
               if ($this->conn->connect_error){
				   echo $this->conn->connect_error;
			   }
		   }
	   }
?>