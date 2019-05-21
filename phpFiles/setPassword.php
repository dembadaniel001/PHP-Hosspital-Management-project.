<?php 
session_start();
    include('databaseConnection.php');
	
	$lastid = null;
	if($_SERVER['REQUEST_METHOD']== "POST"){
		 $password = $_POST['password'];
		 $username = $_SESSION["email"];
		if($conn){
			 $sql3 = "select patient_id from patient_details order by patient_id desc limit  1;";
			 $valid3 = mysqli_query($conn,$sql3);
			 if($valid3){
				 while($rows = mysqli_fetch_assoc($valid3)){
					 $lastid = $rows['patient_id'];
				 }
			 }
			 $sql2 = "insert into patient_verification (username,password,patient_id) values ('".$username."','".$password."',". $lastid .");";
			  $valid2 = mysqli_query($conn,$sql2);
			  if($valid2){
				  
				   header('Location: ..\login.html'); 
			  }
			 else{
				echo mysqli_error($conn);
			 }
	}else{
		die("Connection to database is wrong.");
	}
	}
	
?>