<?php
     session_start();
include('phpFiles/databaseConnection.php');
if($_SERVER['REQUEST_METHOD']=="POST"){
    // echo "Submitted.";
    // echo "THE DATA HAS BEEN SUCCESSFULLY SUPPLIED.";
    $email = $_POST['fName'];
    $password = $_POST['password'];
    /* echo $email;
    echo $password; */
	
	// Checking if the user has activated his account.. 
	
	$sql1 = "SELECT isEmailVerified from patient details where email = $";
	 
   $sql = "SELECT pv_id from patient_verification where username = '".$email."' and password = '".$password."'";
  /*  echo $sql; */
   $valid = mysqli_query($conn,$sql);
   if(!$valid){
	   die( "SOMETHING WRONG WITH THE QUERY." ).mysqli_error($conn);
   }
   $numRows = mysqli_num_rows($valid);
/*    echo $numRows; */
   if($numRows == 1){
	      // Writing the sql query that will be able to get the id of the patient and set it as a session.
		  
		  
	   while($rows = mysqli_fetch_assoc($valid)){
		    $pv_id = $rows['pv_id'];
			
			
		    $sql2 = "SELECT patient_id from  patient_verification where pv_id = $pv_id";
			
			// Validatin the query written.
			
			$valid2 = mysqli_query($conn,$sql2);
			
			if($valid2){
				while( $rows = mysqli_fetch_assoc($valid2)){
					$patient_id = $rows['patient_id'];
					$_SESSION['patient_id'] = $patient_id;
					header('location: logedin.php') ;
				}
			}
			else{
				echo "The second sql query has a problem".mysqli_error($conn);
			}
			
	   }
	  /*  header('location: logedin.php') */;
	  
	  
   }
   else{
	   
	   // CHECKS IN THE DOCTOR VERIFICTION IF THE USER IS A DOCTOR.
	   
	   $sql2 = "SELECT dv_id from doctor_verification where username = '".$email."' and password = '".$password."'";
	   $valid = mysqli_query($conn,$sql2);
	   if(!$valid){
		  echo  "An Error was encoutered.".mysqli_error($valid);
	   }
	   else{
		   
		    $count = mysqli_num_rows($valid);
		   if( $count == 1){
			   	   while($rows = mysqli_fetch_assoc($valid)){
		                  $dv_id = $rows['dv_id'];
			
			
		                $sql2 = "SELECT doc_id from  doctor_verification where dv_id = $dv_id";
			
			// Validatin the query written.
			
			           $valid2 = mysqli_query($conn,$sql2);
			
			                 if($valid2){
				                 while( $rows = mysqli_fetch_assoc($valid2)){
					                 $doc_id = $rows['doc_id'];
					                 $_SESSION['doc_id'] = $doc_id;
					                 header('location: docDash.php');
				                 }
			                 }
			                 else{
				        echo "The second sql query has a problem".mysqli_error($conn);
			                 }
			
	                    }			   
		   }
		   else{
			  /*  echo "No user found."; */
			  $sql3 = "select id from ceo_verification where username = '".$email."' and password = '".$password."'";
			  $valid3 = mysqli_query($conn,$sql3);
			  if($valid3){
				  $number = mysqli_num_rows($valid3); 
				  if($number == 1){
					  header('Location:ceo.php');
				  }
				  else{
					   header('Location:login.php?errorMessage=1');
				  }
			  }
			  else{
				  echo "The second ceo sql query m".mysqli_error($conn);
			  }
			 
		   }
	   }
   }
 
}

?>