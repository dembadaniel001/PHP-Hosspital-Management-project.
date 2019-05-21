<?php
session_start();
if($_SERVER['REQUEST_METHOD']== "POST"){
    
	session_start();
	include('phpFiles/databaseConnection.php');
	if($_SERVER['REQUEST_METHOD']== "POST"){
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
		
			if(strlen($fname) == 0){	
      	  array_push($errors , 'The First Name cannot be Empty.');
	}
	else if(is_numeric($fname)){
         array_push($errors,'The First Name field cannot be numeric.');	
	}
	
	//VALIDATING THE SECOND NAME.
	if(strlen($lName) == 0){	
      	  array_push($errors , 'Last name cannot be Empty.');
	}
	else if(is_numeric($lName)){
         array_push($errors,'The  Last name field cannot be numeric.')	;	
	}
	
	//VALIDATING THE SURNAME.
	if(strlen($surName) == 0){	
      	  array_push($errors , 'The Sur name cannot be Empty.');
	}
	else if(is_numeric($surName)){
         array_push($errors,'The SurName name field cannot be numeric.')	;	
	}
	
	//VALIDATING THE DATE.
	if(strlen($date) == 0){
		array_push($errors, 'The date should not be empty.');
	}
	
	//VALIDATING THE BIRTH CERTIFICATE NUMBER.
	if(strlen($birthCertNumber) == 0){
		array_push($errors,'Birth Certificate Numbr Should Not Be Empty.');
	}
	else if(!(is_numeric($birthCertNumber))){
		array_push($errors,'Birth Certificate Number Is Invalid.');
	}
	
	//VALIDATING THE NHIF NUMBER.
	if(strlen($nhifNumber) == 0){
		array_push($errors,'NHIF Numbr Should Not Be Empty.');
	}
	else if(!(is_numeric($nhifNumber))){
		array_push($errors,'Birth Certificate Number Is Invalid.');
	}
	
	//VALIDATING THE KRA NUMBER.
	
	if(strlen($kraNumber) == 0) {
		array_push($errors,'KRA Numbr Should Not Be Empty.');
	}
	else if(!(is_numeric($kraNumber))){
		array_push($errors,'KRA Number Is Invalid.');
	}
	
	//VALIDATING PHONE NUMBER.
		if(strlen($phone) == 0){
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
	$_SESSION["fName"] = $fname;
	$_SESSION["lName"] = $lName;
	$_SESSION["surName"] = $surName;
	$_SESSION["date"] = $date;
	$_SESSION["birthCertNumber"] = $birthCertNumber;
	$_SESSION["nhifNumber"] = $nhifNumber;
	$_SESSION["kraNumber"] = $kraNumber;
	$_SESSION["email"]= $email;
	$_SESSION["phone"] = $phone;
	$_SESSION["callTime"] = $callTime;
	$_SESSION["residence"] = $residence;
	
	header('Location:confirmation.php');
	}
	}

}
?>