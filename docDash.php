<?PHP
     session_start();
     include('phpFiles/databaseConnection.php');
	 include('includes/databaseConnection.php');
     include('includes/viewAppointmentsClass.php');
	 
	 if(isset($_POST['submitAvailability'])){ 
	 
	 // GETTIN THE DATA FROM THE FORM.
	 
	 $date= $_POST['date'];
	 $hospital= $_POST['hospital'];
	 $from= $_POST['from'];
	 $to= $_POST['to'];
	 $doc_id = $_SESSION['doc_id'];
	 
	 
	 $databaseConnection = new database();
	 $databaseConnection->connect();
	 $sql = " insert into appointment_availability (doc_id, availability_date, available_from, available_till,hospital_id) values ($doc_id,'". $date ."', '". $from ."', '". $to ."','".$hospital."');";
	 $valid = $databaseConnection->conn->query($sql);
	 if($valid){
		  echo "<script src=\"assets/js/jquery.min.js\"></script>";
	   echo "<script>
	                  $(function(){
						  $(\"#successUpdate\").modal();
					  });
	   </script>";
	 }
	 else{
		 echo "query bad.".$databaseConnection->conn->error ;
	 }
	 }
	 
	 
	 if(isset($_POST['submitDonation'])){
		$select2 = $_POST['select2'];
        $firstName = $_POST['firstName'];
        $secondName = $_POST['secondName'];
        $LastName = $_POST['LastName'];
        $date = $_POST['date'];
        $gender = $_POST['gender'];
		$sql = "insert into organ_donation  (Fname,Lname,Sname,gender,date_registered,organ_donated) values ('". $firstName."','".$secondName."','".$LastName."','".$gender."','".$date."','".$select2."')";
		
		if($conn){
			$valid = mysqli_query($conn,$sql);
			if($valid){
				 echo "<script src=\"assets/js/jquery.min.js\"></script>";
	               echo "<script>
	                              $(function(){
						              $(\"#organDonationConfirmation\").modal();
					              });
	                     </script>";
			}
			else{
				echo "The insertion query has a problem".mysqli_error($conn);
			}
		}
		else{
			echo "database connection terminated.";
		}
	 }

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="META data " content="This is the content that will be shown frothe data that will bereferenced by all of te metataggs">
    <meta name="second" content="searching">
    <title>Hospital</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cutive+Mono">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Gentium+Basic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Gentium+Book+Basic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=IM+Fell+Great+Primer">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=IM+Fell+Great+Primer+SC">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Itim">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mountains+of+Christmas">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Petit+Formal+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tenali+Ramakrishna">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Timmana">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web">
    <link rel="stylesheet" href="assets/css/DashBoard-light-boostrap1.css">
    <link rel="stylesheet" href="assets/css/DashBoard-light-boostrap2.css">
    <link rel="stylesheet" href="assets/css/DashBoard-light-boostrap4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/DashBoard-light-boostrap3.css">
    <link rel="stylesheet" href="assets/css/Analog_Clock.css">
    <link rel="stylesheet" href="assets/css/Basic-fancyBox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Carousel-Hero.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-v2-Modal--Full-with-Google-Map.css">
    <link rel="stylesheet" href="assets/css/Customizable-Background--Overlay.css">
    <link rel="stylesheet" href="assets/css/Dashboard-layout-v11.css">
    <link rel="stylesheet" href="assets/css/Dashboard-layout-v111.css">
    <link rel="stylesheet" href="assets/css/Dashboard-layout-v112.css">
    <link rel="stylesheet" href="assets/css/DashBoard-light-boostrap.css">
    <link rel="stylesheet" href="assets/css/Drag--Drop-Upload-Form.css">
    <link rel="stylesheet" href="assets/css/Dropdown-Login-with-Social-Logins.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Dark-1.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer-2.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer-1.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Navbar-Fixed-Side.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/OcOrato---Login-form.css">
    <link rel="stylesheet" href="assets/css/OcOrato---Login-form1.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu-1.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu1-1.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu1.css">
    <link rel="stylesheet" href="assets/css/SIdebar-Responsive-2.css">
    <link rel="stylesheet" href="assets/css/SIdebar-Responsive-21.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/sidebar1.css">
    <link rel="stylesheet" href="assets/css/Sortable-filter-gallery-portfolio.css">
    <link rel="stylesheet" href="assets/css/Sortable-filter-gallery-portfolio1.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
<link rel="icon" 
      type="image/png" 
      href="assets/img/Hospital-128.png">
<title>Hospitals Management .</title>
</head>

<body style="background-color:#d3e4f8;">
    <div style="margin-bottom:115px;">
        <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean-button" style="background-color:#1aa0be;height:100px;">
            <div class="container-fluid"><a class="navbar-brand" href="#" style="font-size:30px;font-family:&quot;Tmes  New Roman&quot;;"><i class="fa fa-stethoscope" style="font-size:50px;color:rgb(255,10,10);"></i>&nbsp; &nbsp;Hospiatal System.</a><button class="navbar-toggler"
                    data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-right">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="index.html" style="color:rgb(11,12,12);font-size:20px;font-family:Times New Roman;"><strong>Home .</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="about.html" style="color:rgb(0,0,0);font-size:20px;font-family:Times New Roman;"><strong>About </strong>.</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="contacts.html" style="color:rgb(1,1,1);font-size:20px;font-family:Times New Roman;"><strong>Contacts.</strong></a></li>
                          <li><a href="index.html" class="btn btn-light action-button" type="button" data-toogle="modal" data-target="#modal">
                            <i class="fa fa-sign-out" style="font-size:26px; color:red;">Log Out.</i>
                            
                        </a></li>  
                        
                    </ul>
					
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 style="margin-top:0px;font-family:'Gentium Book Basic', serif;">Doctor Dashboard.</h2>
            </div>
            <div class="col"><div class="dropdown">
   
    <ul role="menu" class="dropdown-menu">
    <div id="loginbox" style="margin-top:50px;float:right;" class="mainbox col-md-12 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Sign In</div>
                <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
            </div>     
            <div style="padding-top:30px" class="panel-body" >
                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                <form id="loginform" class="form-horizontal" role="form">    
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
                    </div>
                            
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                    </div>
                                
                    <div class="input-group">
                        <div class="checkbox">
                            <label>
                                <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                            </label>
                        </div>
                    </div>
                    <br>
                    <div style="margin-top:10px" class="form-group">
                        <div class="col-sm-12 controls">
                            <a id="btn-login" href="#" class="btn btn-success">Login  </a>
                            <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                Don't have an account! 
                                <a href="#" onClick="event.preventDefault(); $('#loginbox').hide(); $('#signupbox').show()">
                                    Sign Up Here
                                </a>
                            </div>
                        </div>
                    </div>    
                </form>     
            </div>                     
        </div>  
    </div>
    <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-12 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Sign Up</div>
                    <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="event.preventDefault(); $('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
            </div>  
            <div class="panel-body" >
                <form id="signupform" class="form-horizontal" role="form">
                    <div id="signupalert" style="display:none" class="alert alert-danger">
                        <p>Error:</p>
                        <span></span>
                    </div>
                          
                    <div class="form-group">
                        <label for="email" class="col-lg-3 control-label">Email</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="email" placeholder="Email Address">
                        </div>
                    </div>
                            
                    <div class="form-group">
                        <label for="firstname" class="col-lg-3 control-label">First Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="firstname" placeholder="First Name">
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <label for="lastname" class="col-lg-3 control-label">Last Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="password" class="col-lg-3 control-label">Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="passwd" placeholder="Password">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                            <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i>Sign Up</button>
                            <span style="margin-left:8px;">or</span>  
                        </div>
                    </div>
                        
                    <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                            <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>Sign Up with Facebook</button>
                        </div>                                           
                    </div>
                </form>
            </div>
        </div>
    </div> 
    </ul>
</div>

</div>
        </div>
       
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="card" style="background-color:#b7e5eb;">
                    <div class="card-header" style="background-color:rgba(181,24,109,0.59);">
                        <h5 class="mb-0">Navigation&nbsp;</h5>
                    </div>
                    <div class="card-body">
                        <div class="list-group"><a class="list-group-item list-group-item-action list-group-item-info active"><span><strong>Home</strong></span></a><a class="list-group-item list-group-item-action" href="index.html" data-target = "#postAvalability" data-toggle = "modal"><span><strong>Post Avaliability.</strong></span></a>
                            
								<a class="list-group-item list-group-item-action" data-target = "#organDonation" data-toggle = "modal"><span>
								<strong>Organ Donation.</strong></span></a><a class="list-group-item list-group-item-action"
                                    href="doctorDetails.php"><span><strong>Edit Details.</strong></span></a><a class="list-group-item list-group-item-action" href = "viewOrgans.php"><span><strong>List of Organs..</strong></span></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div>
                    <div class="card">
                        <div class="card-header" style="background-color:rgba(181,24,109,0.59);">
                            <h5 class="mb-0">Major Operations ....</h5>
                        </div>
                        <div class="card-body" style="background-color:#b7e5eb;">
                            <div class="row">
                                <div class="col">
                                    <div class="card" data-bs-hover-animate="jello" style="background:linear-gradient(90deg, #11998e 0%, #38ef7d 100%);" data-toggle="modal" data-target="#modal">
                                        <div class="card-body" style="color:rgb(254,255,255);">
                                            <p style="color:rgb(249,249,249);"><i class="fa fa-search" style="font-size:50px;"></i>&nbsp; &nbsp; &nbsp; &nbsp;search for&nbsp;</p>
                                            <p style="color:rgb(255,252,252);"><strong>Patients</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col"><a href = "viewAppointments.php">
                                    <div class="card" style="background:linear-gradient(90deg , #45b649 0%, #dce35b 100%);color:rgb(255,255,255);">
                                        <div class="card-body" style="color:rgb(255,255,255);">
                                            <p style="color:rgb(255,255,255);"><i class="fa fa-book" style="font-size:50px;"></i>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; view&nbsp;</p>
                                            <p style="color:rgb(255,255,255);"><strong>Appointments.</strong></p>
                                        </div>
                                    </div></a>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-header" style="background-color:rgba(181,24,109,0.59);">
                <h5 class="mb-0">Appointments made&nbsp;</h5>
            </div>
            <div class="card-body" style="background-color:#b7e5eb;">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover table-dark table-sm">
                        <caption>This table is all &nbsp;about the doctors appointments.</caption>
                        <thead>
                            <tr>
                                <th class="th" style="color:rgb(255,255,255);">Doctor Name.</th>
                                <th style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;color:rgb(255,255,255);">Patient Name.</th>
                                <th class="th" style="color:rgb(255,253,253);">Time&nbsp;</th>
                                <th class="th" style="color:rgb(254,254,254);">Patient Id&nbsp;</th>
                                <th style="color:rgb(255,246,246);">Appointment Date.</th>                               
                            </tr>
                        </thead>
                        <tbody>
						
						    <?php
							
							       $sql = " select concat(doctor_details.Fname,'  ', doctor_details.Lname) as doctor_names, concat(patient_details.Fname, ' ',patient_details.Lname) as Patient_Name, appointments_booked.time_slot, appointments_booked.appointmant_date from  appointments_booked inner join doctor_details on appointments_booked.doc_id =  doctor_details.doc_id  inner join patient_details on  appointments_booked.patient_id =  patient_details.patient_id where doctor_details.doc_id = ".$_SESSION['doc_id'].";";
							        $valid = mysqli_query($conn,$sql);
									if($valid){
										
										while($rows = mysqli_fetch_assoc($valid)){
											$docName = $rows['doctor_names'];
											$patNmae = $rows['Patient_Name'];
											$time_slot = $rows['time_slot'];
											$appointmant_date = $rows['appointmant_date'];
											echo "<tr>
                                <td>$docName</td>
                                <td style=\"padding-top:0px;padding-right:0px;padding-bottom:0px;\">$patNmae</td>
                                <td>$time_slot</td>
								<td>Nairobi Hoapital</td>
                                <td>$appointmant_date</td>                                
                            </tr>";
										}
									}
									else{
										echo "invlaid";																				
									}
							?>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <td><em>Doctor Name</em><br></td>
                                <td><em>Patient Name.</em><br></td>
                                <td><em>Time&nbsp;</em>&nbsp;<br></td>
                                <td><em>Patient Id&nbsp;&nbsp;</em><br></td>
                                <td>Appointment Date</td>                               
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
	  <div role="dialog" tabindex="-1" class="modal fade" id="organDonationConfirmation">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#1aa0be;">
                <h4 class="modal-title">Confirmation !!!</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body">
                <p style="color:rgb(0,0,0);">You have Successfully Added Organ Donation.</p>
            </div>
            <div class="modal-footer" style="background-color:#1aa0be;"><button class="btn btn-danger" type="button" data-dismiss="modal" style="color:rgb(255,255,255);background-color:rgb(255,74,85);">Close</button></div>
        </div>
    </div>
</div> 
	<div role="dialog" tabindex="-1" class="modal fade" id = "organDonation">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#d2a6a6;">
                <h4 class="text-center modal-title"><strong>Organ Donation .</strong></h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body" style="background-color:#ebdada;">
                <form method = "post" action = "docDash.php">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col"><label class="col-form-label">First Name:</label><input type="text" placeholder="First Name" name="firstName" required class="form-control" /></div>
                            <div class="col"><label class="col-form-label">Middle Name:</label><input type="text" placeholder="Second Name" name="secondName" required class="form-control" /></div>
                            <div class="col"><label class="col-form-label">Last Name:</label><input type="text" placeholder="Last Name" name="LastName" required class="form-control" /></div>
                        </div>
                        <div class="form-row">
                            <div class="col"><label class="col-form-label">Date Of Birth:</label><input type="date" name="date" required class="form-control" /></div>
                            <div class="col"><label class="col-form-label">Gender:</label><select name="gender" required class="form-control"><option value="Male">Male</option><option value="Female">Female</option></select></div>
                        </div>
                        <div class="form-row">
                            <div class="col-4 offset-4"><label class="col-form-label">Organs Donated:</label><select  required name="select2" class="form-control"><option value="Lungs">Lungs</option><option value="Heart">Heart</option><option value="Brain">Brain</option><option value="Bones">Bones</option><option value="Liver">Liver</option></select></div>
                        </div>
                        <div class="form-row">
                            <div class="col-4 offset-4"><button class="btn btn-success btn-block btn-lg" type="submit" name = "submitDonation" style="color:rgb(255,255,254);background-color:rgb(135,203,22);font-size:22px;margin-top:30px;">Submit Donation .</button></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer" style="background-color:#d2a6a6;"><button class="btn btn-danger btn-lg" type="button" data-dismiss="modal" style="color:rgb(255,255,255);background-color:rgb(255,74,85);">Close</button></div>
        </div>
    </div>
</div>
   <div role="dialog" tabindex="-1" class="modal fade" id="modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Patient Search .</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body">
                <p>Please Insert The Patient Id Then Search.</p>
                <form action="medicalHistory.php" method="post">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i>ID</span></div><input type="text" name="patient_id" class="form-control" />
                            <div class="input-group-append"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6 offset-sm-3"><button class="btn btn-primary btn-block" type="submit" name = "view" style="background-color:rgb(52,114,247);color:rgb(252,252,252);"><strong>Search</strong></button></div>
                    </div>
                </form>
            </div>
            <div class="modal-footer"><button class="btn btn-success" type="button" data-dismiss="modal" style="background-color:#1aa0be;color:rgb(255,255,255);">Close</button></div>
        </div>
    </div>
</div>
    <div class="modal fade" role="dialog" tabindex="-1" id="ceomodal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#eec9c9;">
                    <h4 class="text-center modal-title">Message CEO .</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body" style="background-color:#bae6d1;">
                    <p>Enter The Message you want to send.</p>
                    <form>
                        <div class="form-row" style="margin-top:30px;">
                            <div class="col" style="height:80px;"><textarea class="form-control" placeholder="Message is Here." style="height:80px;background-color:#eefcf6;color:rgb(0,0,0);"></textarea></div>
                        </div>
                        <div class="form-row" style="margin-top:30px;">
                            <div class="col-md-2 offset-5"><button class="btn btn-primary" type="button" style="background-color:rgb(52,114,247);color:rgb(255,255,255);">Send.</button></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer" style="background-color:#bae6d1;"><button class="btn btn-danger" type="button" data-dismiss="modal" style="background-color:rgb(255,74,85);color:rgb(255,255,255);">Close</button></div>
            </div>
        </div>
    </div>
	<div role="dialog" tabindex="-1" class="modal fade" id="postAvalability">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#f1bbbb;">
                <h4 class="modal-title">POST AVAILABILITY !!!</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body" style="color:rgb(0,0,0);">
                <form action = "docDash.php" method = "post">
                    <p style="color:rgb(0,0,0);">Date:</p><input type="date" required name="date" class="form-control" style="color:rgb(0,0,0);" name = "date"/>
                    <p style="color:rgb(0,0,0);">Hospital :</p><select name="hospital"><option value="1">Kiambu Hospital</option><option value="2">Kisumu County General Hospital</option><option value="3">Kibiko Hospital</option><option value="4">Siaya General Hospital</option><option value="5">Kajiado Referal Hospital</option><option value="6">Moi Teaching Referal Hospital</option><option value="7">Taita General Referal Hospital</option></select>
                    <p style="color:rgb(0,0,0);">From:</p><select name="from" value="Time" class="form-control"><option value="6:00 am">6:00 am</option><option value="7:00 am" selected>7:00 am</option><option value="8:00 am">8:00 am</option><option value="8:00 am">8:00 am</option><option value="9:00 am">9:00 am</option><option value="10:00 am">10:00 am</option><option value="11:00 am">11:00 am</option><option value="12:00 am">12:00 am</option><option value="1:00 pm">1:00 pm</option><option value="2:00 pm">2:00 pm</option><option value="3:00 pm">3:00 pm</option><option value="4:00 pm">4:00 pm</option></select>
                    <p style="color:rgb(0,0,0);">To :</p><select name="to" value="Time" class="form-control"><option value="7:00am" selected>7:000am</option><option value="8:00am" selected>8:00 am </option><option value="9:00 am">9:00 am</option><option value="10:00 am">10:00 am</option><option value="11:00 am">11:00 am</option><option value="12:00 am">12:00 am</option><option value="1:00 pm">1:00 pm</option><option value="2:00 pm">2:00 pm</option><option value="3:00 pm">3:00 pm</option><option value="4:00 pm">4:00 pm</option><option value="5:00 pm">5:00 pm</option></select>
                    <div class="form-row">
                    <div class="col-2 offset-5"><button class="btn btn-success" type="submit" style="font-size:30px;color:rgb(255,255,255);background-color:#23a702;" name = "submitAvailability"><i class="fa fa-thumb-tack" style="font-size:30px;"></i>Post</button></div>
                    </div>
                </form>
            </div>
            <div class="modal-footer" style="background-color:#f4bcbc;"><button class="btn btn-danger" type="button" data-dismiss="modal" style="background-color:rgb(255,74,85);color:rgb(255,255,255);">Close</button></div>
        </div>
    </div>
</div>
<div role="dialog" tabindex="-1" class="modal fade " id="successUpdate">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#5be088;">
                <h4 class="modal-title">Congatulations !!!</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body">
                <p class="text-center bg-warning" style="color:rgb(0,0,0);">Your Appointment Availability has successfully been updated.</p>
            </div>
            <div class="modal-footer" style="background-color:#5be088;"><button class="btn btn-danger" type="button" data-dismiss="modal" style="color:rgb(254,254,254);background-color:rgb(255,74,85);">Close</button></div>
        </div>
    </div>
</div>
    <footer class="footer" style="background-color:#1aa0be;">
        <div class="row">
            <div class="col-sm-6 col-md-4 footer-navigation">
                <h3><a href="#">Hospital Management .</a></h3>
                <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Feedback.</a><strong> · </strong><a href="#">Locations</a><strong> · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
                <p
                    class="company-name" style="color:rgb(255,255,255);">Hospital Management System. © 2019</p>
            </div>
            <div class="col-sm-6 col-md-4 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">Consolidated Biulding 23 Floor</span> Upper Hill , Nairobi , Kenya.</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left"> +254792107437</p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank" style="color:rgb(3,97,252);">management@management.t</a></p>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4 footer-about ourDedics">
                <h4>Site Created and Maintained By :&nbsp;</h4>
                <h5><strong>JohKariMo Developers</strong></h5>
                <p style="color:rgb(255,255,255);"> A software comapny dedicated to meet All Your Software needs. Contact us or visit us for more to do with development of Web Applications , Android Apps , &nbsp;Home Automatio etc .</p>
                <div class="social-links social-icons"><a href="facebook.com"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
    <script src="assets/js/Basic-fancyBox-Gallery2.js"></script>
    <script src="assets/js/Analog_Clock.js"></script>
    <script src="assets/js/Contact-Form-v2-Modal--Full-with-Google-Map.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="assets/js/DashBoard-light-boostrap1.js"></script>
    <script src="assets/js/jquery.validate.js"></script>
    <script src="assets/js/Dashboard-layout-v11.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/DashBoard-light-boostrap.js"></script>
    <script src="assets/js/new.js"></script>
    <script src="assets/js/DashBoard-light-boostrap3.js"></script>
    <script src="assets/js/DashBoard-light-boostrap2.js"></script>
    <script src="assets/js/Sortable-filter-gallery-portfolio.js"></script>
    <script src="assets/js/modal.js"></script>
    <script src="assets/js/passwordValidation.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/bs-animation.js"></script>
</body>

</html>