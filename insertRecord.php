<?php
session_start();
      include('phpFiles/databaseConnection.php');
      if($_SERVER['REQUEST_METHOD'] == "POST"){
		  
		  $docId = $_SESSION['doc_id'];
          $patient_id = $_SESSION['patient_id_set_doctor_search'];	
          $date = $_POST['date'];
		  $hospitalId= $_POST['hospitalId'];
		  $symptoms = $_POST['symptoms'];
		  $testsPerfomed = $_POST['testsPerfomed'];
		  $illness = $_POST['illness'];
		  $medication = $_POST['medication'];
		  
		  
		  //The query to insert data int the database.
		  
		  $sql = "INSERT INTO  patient_history (patient_id,doc_id,hospital_id,test_perfomed,medication,date_of_illnaess,illness,symptoms) VALUES ($patient_id,$docId,$hospitalId,'".$testsPerfomed."','".$medication."','".$date."','".$illness."','".$symptoms."');";
		  
		  
		  $valid = mysqli_query($conn,$sql);
		  if($valid){
			  header('Location:medicalHistory.php');
		  }
		  else{
			  echo "An error was experienced.".mysqli_error($conn);
		  }
		  
           		  
	  }

?>