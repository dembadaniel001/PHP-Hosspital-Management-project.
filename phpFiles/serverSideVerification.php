<?php
       // MAKING SURE ALL THE INPUTS ARE NOT EMPTY.
		   $errors = null;
	   
	 function cleanUpData($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = strip_tags($data);
		
		return $data;
	}
	
	$fname = 				cleanUpData($_POST['fName']);
    $lName =            	cleanUpData($_POST['Lname']);
	$surName =          	cleanUpData($_POST['Sname']); 
    $date =             	cleanUpData($_POST['date']);
	$birthCertNumber =   	cleanUpData($_POST['birthCertNumber']);
	$nhifNumber  =       	cleanUpData($_POST['nhifNumber']);
	$kraNumber  =       	cleanUpData($_POST['kraNumber']);
	$email =              	cleanUpData($_POST['email']);
	$phone =            	cleanUpData($_POST['phone']);
	$callTime  =        	cleanUpData($_POST['callTime']);
	$residence =        	cleanUpData($_POST['residence']);
	
	$errors = array();
	// VALIDATING THE FIRST NAME.
	
	if(strlen($fname) == 0){	
      	  array_push($errors , 'The name cannot be Empty.');
	}
	else if(is_numeric($fname)){
         array_push($errors,'The name field cannot be empty.');	
	}
	
	//VALIDATING THE SECOND NAME.
	if(strlen($lName) == 0){	
      	  array_push($errors , 'The name cannot be Empty.');
	}
	else if(is_numeric($lName)){
         array_push($errors,'The name field cannot be empty.')	;	
	}
	
	//VALIDATING THE SURNAME.
	if(strlen($surName) == 0){	
      	  array_push($errors , 'The name cannot be Empty.');
	}
	else if(is_numeric($surName)){
         array_push($errors,'The name field cannot be empty.')	;	
	}
	
	//VALIDATING THE DATE.
	if(strlen($date)){
		array_push($errors, 'The date should not be empty.');
	}
	
	//VALIDATING THE BIRTH CERTIFICATE NUMBER.
	if(strlen($birthCertNumber)){
		array_push($errors,'Birth Certificate Numbr Should Not Be Empty.');
	}
	else if(!(is_numeric($birthCertNumber))){
		array_push($errors,'Birth Certificate Number Is Invalid.');
	}
	
	//VALIDATING THE NHIF NUMBER.
	if(strlen($nhifNumber)){
		array_push($errors,'NHIF Numbr Should Not Be Empty.');
	}
	else if(!(is_numeric($nhifNumber))){
		array_push($errors,'Birth Certificate Number Is Invalid.');
	}
	
	//VALIDATING THE KRA NUMBER.
	
	if(strlen($kraNumber)){
		array_push($errors,'KRA Numbr Should Not Be Empty.');
	}
	else if(!(is_numeric($kraNumber))){
		array_push($errors,'KRA Number Is Invalid.');
	}
	
	//VALIDATING PHONE NUMBER.
		if(strlen($phone)){
		array_push($errors,'Phone Numbr Should Not Be Empty.');
	}
	else if(!(is_numeric($phone))){
		array_push($errors,'Phone Number Is Invalid.');
	}
	
	//validating the email address.
	if(strlen($email) == 0){
		array_push($errors, 'The Email Address Should not be empty.');
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       array_push($errors,'Invalid Email Address.');
    }
	
	if(count($errors) == 0){
		 if($conn){
		  $sql = "insert into patient_details(Fname,Lname,SurName,phone_number,email,Residence,birthCertificateNumber,kraNumber,NhifNumber,callTime,Date_Of_Birth) values('".$fname. "','".$lName."','".$surName."','".$phone."','".$email."','".$residence."','".$birthCertNumber."','".$kraNumber."','".$nhifNumber."','".$callTime."','".$date ."');";
	      $valid = mysqli_query($conn,$sql);
		  if($valid){
			  $sql2 = "insert into patient_verification (username,password,patient_id) values ('".$email."','".$nhifNumber."','". 1 ."');";
			  $valid2 = mysqli_query($conn,$sql2);
			  if($valid2){
				  
				   header('Location:login.html'); 
			  }
			 else{
				echo mysqli_error($conn);
			 }
		  }
		  else{
			  mysqli_error($conn);
		  }
	  }
	  else{
		  die("The database connection was not successful.");
	  }
	}
	   
?>