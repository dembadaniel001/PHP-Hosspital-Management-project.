<?php
      session_start();
      include('phpFiles/databaseConnection.php');
      if(isset($_POST['view'])){
			  
			  if(isset($_GET['patient_id'])){
				  echo "view clicked from appointments booked.";
				  $patient_id = $_GET['patient_id']; 
			  }
			  else{
				  $patient_id = $_POST['patient_id']; 
			  }
		  
		  
           $_SESSION['patient_id_set_doctor_search'] = $patient_id;	  
	  }
	  else{
		  
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
                    <ul class="nav navbar-nav ml-auto">
                        
                    </ul><span class="navbar-text actions"> <a href = "index.html"> <button class="btn btn-light action-button" type="button"><i class="fa fa-sign-out" style="font-size:26px;"></i>Log Out.</button></a></span>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 style="margin-top:0px;font-family:'Gentium Book Basic', serif;">Doctor Dashboard.</h2>
            </div>
        </div>
        <ol class="breadcrumb" style="background-color:#f1655c;">
            <li class="breadcrumb-item"><a href="index.html"><span>Home</span></a></li>
            <li class="breadcrumb-item"><a href="login.php"><span>Log In</span></a></li>
            <li class="breadcrumb-item"><a href="docDash.php"><span>Doctor Panel</span></a></li>
            <li class="breadcrumb-item"><a href="medicalHistory.html"><span>Patient Details &amp; Medical History</span></a></li>
        </ol>
        <div class="card">
            <div class="card-header" style="background:linear-gradient(90deg,#b5186d, #b51860);color:rgb(254,254,254);">
                <h5 class="mb-0">Patient Details.</h5>
            </div>
            <div class="card-body" style="background-color:#b7e5eb;">
                <div class="table-responsive" style="width:600px;margin-left:auto;margin-right:auto;">
                    <table class="table table-striped table-bordered table-hover table-dark table-sm">
                        <caption>Patient Details</caption>
                        <tbody>
						
						  <?php
						    
						      $sql = " select concat(Fname,' ',Lname, ' ',SurName) as Names,phone_number,email,birthCertificateNumber,kraNumber,NhifNumber,Date_Of_Birth from patient_details where patient_id ='".$_SESSION['patient_id_set_doctor_search']."';";
							$valid = mysqli_query($conn,$sql);
							
							if($valid){
                                $number = mysqli_num_rows($valid);
                                    if($number<1){
										echo "
										<script src=\"assets/js/jquery.min.js\"></script>
										<script>
										          $(function(){
													  var modal = $(\"#noResult\");
													  modal.modal(\"show\");
												  });
										</script>
										";
									}								
								while ($rows = mysqli_fetch_assoc($valid)){
									$Names = $rows['Names'];
									$phone_number = $rows['phone_number'];
									$birthCertificateNumber = $rows['birthCertificateNumber'];
									$kraNumber = $rows['kraNumber'];
									$NhifNumber = $rows['NhifNumber'];
									$Date_Of_Birth = $rows['Date_Of_Birth'];
									$email = $rows['email'];
									
									echo "
															
                            <tr>
                                <td>Name:</td>
                                <td>$Names</td>
                            </tr>
                            <tr>
                                <td>DOB:</td>
                                <td>$Date_Of_Birth</td>
                            </tr>
                            <tr>
                                <td>Phone Number:</td>
                                <td>$phone_number</td>
                            </tr>
                            <tr>
                                <td>Email Address:</td>
                                <td>$email</td>
                            </tr>
                            <tr>
                                <td>Birth Certificate Number:</td>
                                <td>$birthCertificateNumber</td>
                            </tr>
                            <tr>
                                <td>NHIF Number :</td>
                                <td>$NhifNumber<br></td>
                            </tr>
                            <tr>
                                <td>KRA Number</td>
                                <td>$kraNumber<br></td>
                            </tr>
									";
									
									
								}
							}
							else{
								echo "error".mysqli_error($conn);
							}
	  
						  
						  ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
		<div class="row" style="margin-bottom:2%;">
    <div class="col-3 offset-9"><button class="btn btn-primary btn-block btn-lg" type="button" style="color:rgb(255,255,255);background-color:rgb(5,75,224);" data-toggle="modal" data-target="#modal"><i class="fa fa-plus" style="font-size:25px;"></i>ADD DECORD</button></div>
</div>
        <div class="card">
            <div class="card-header" style="background: linear-gradient(90deg,#b5186d, #b51860);">
                <h5 class="mb-0" style="color:rgb(247,251,255);">PatientMedical History.</h5>
            </div>
            <div class="card-body" style="background-color:#b7e5eb;">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover table-dark table-sm">
                        <caption>Medical Histry Table.</caption>
                        <thead>
                            <tr>
							       <th>Sno</th>
                                <th>Patient Name</th>
                                <th>Date</th>
                                <th>ILLNESS</th>
                                <th>MEDICATION</th>
                                <th>SYMPTOMS</th>
                                <th>MEDICAL CENTER</th>
                                <th>DOCTOR</th>
                            </tr>
                        </thead>
                        <tbody>
						
						    <?php 
							    $sql = " select concat(doctor_details.Fname,'  ', doctor_details.Lname) as doctor_names, concat(patient_details.Fname, ' ',patient_details.Lname) as Patient_Name,hospital_details.hospital_name as hospital_name , patient_history.test_perfomed, patient_history.medication,patient_history.date_of_illnaess, patient_history.illness, patient_history.symptoms from  patient_history inner join doctor_details on doctor_details.doc_id =  patient_history.doc_id inner join patient_details on patient_details.patient_id =  patient_history. patient_id inner join  hospital_details on  hospital_details.hospital_id = patient_history.hospital_id where  patient_history.patient_id ='". $_SESSION['patient_id_set_doctor_search']."';";
								$valid2 = mysqli_query($conn,$sql);
								if($valid2){
									$sno = 0;
									while($rows = mysqli_fetch_assoc($valid2)){
										
										$doctor_names = $rows['doctor_names'];
										$Patient_Name = $rows['Patient_Name'];
										$hospital_name = $rows['hospital_name'];
										$test_perfomed = $rows['test_perfomed'];
										$medication = $rows['medication'];
										$date_of_illnaess = $rows['date_of_illnaess'];
										$illness = $rows['illness'];
										$symptoms = $rows['symptoms'];
										$sno = $sno+1;
										
										echo "
										
										    <tr>
											<td>$sno</td>
                                    <td>$Patient_Name</td>
                                    <td>$date_of_illnaess </td>
									<td>$illness</td>
									<td>$medication</td>
									<td>$symptoms</td>
									<td>$hospital_name</td>
									<td>$doctor_names</td>
                            </tr>
											
										";
										
									}
								}
							?>						                                                    
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>PATIENT NAME<br></td>
                                <td>DATE<br></td>
                                <td>ILLNESS<br></td>
                                <td>MEDICATION<br></td>
                                <td>SYMPTOMS<br></td>
                                <td>SYMPTOMS<br></td>
                                <td>DOCTOR<br></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
	<!-- 
	    THE MODAL ASREA OF THE NO RESULTS FOUND.
	-->
	
	
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
<div role="dialog" tabindex="-1" class="modal fade" id="modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#f4c8c8;">
                <h4 class="modal-title">Add Patient Record .</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body" style="background-color:#c6f1ac;">
                <form action="insertRecord.php" method="post">
                    <div class="form-group"><label>Date :</label><input type="date" name="date" required class="form-control" /></div>
                    <div class="form-group"><label>Hospital ID :</label><input type="text" name="hospitalId" required placeholder="hospital ID" class="form-control" /></div>
                    <div class="form-group"><label>Symptoms</label><textarea name="symptoms" placeholder="Patient Symptoms." required class="form-control"></textarea></div>
                    <div class="form-group"><label>Tests Perfomed :</label><textarea name="testsPerfomed" placeholder="Tests Perfomed on Patient." required class="form-control"></textarea></div>
                    <div class="form-group"><label>Illness :</label><textarea name="illness" placeholder="Illness of patient." required class="form-control"></textarea></div>
                    <div class="form-group"><label>Medication :</label><textarea name="medication" placeholder="Medication given to patient." required class="form-control"></textarea></div><button class="btn btn-danger btn-block btn-lg" type="submit" style="color:rgb(255,255,255);background-color:rgb(255,74,85);">Save Record .</button></form>
            </div>
            <div class="modal-footer" style="background-color:#f4c8c8;"><button class="btn btn-warning" type="button" data-dismiss="modal" style="color:rgb(255,255,255);background-color:rgb(255,149,0);">Close</button></div>
        </div>
    </div>
</div>
<div role="dialog" tabindex="-1" class="modal fade" id = "noResult">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Information !!!</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body">
                <p style="color:rgb(0,0,0);">No such user was found.</p>
            </div>
            <div class="modal-footer"><a href = "docDash.php"><button class="btn btn-danger" >Close</button></a></div>
        </div>
    </div>
</div>
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