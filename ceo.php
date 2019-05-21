<?php
          session_start();
     include('phpFiles/databaseConnection.php');
	 include('includes/databaseConnection.php');
     include('includes/viewAppointmentsClass.php');
	 
	 if(isset($_POST['search'])){
		 $doctorid = $_POST['doctor_id'];
		 header('Location: doctorSearch.php?doctorid='.$doctorid.'');
	 }
	 
	 if(isset($_POST['addHospital'])){
		 $name = $_POST['name'];
		 $level = $_POST['level'];
		 $location = $_POST['location'];
         $sql = "insert into  hospital_details (hospital_name,level,location) values ('". $name."',".$level.",'".$location."')";
		 
		 if($conn){
			 $valid = mysqli_query($conn,$sql);
			 if($valid){
				 echo "added.";
			 }
			 else{
				 echo "The sql query has a problem.".mysqli_error($conn);
			 }
		 }
		 else{
			 echo "database connection_aborted";
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
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
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
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#"><strong>Welcome ??Name ?? . Manage Patents eadily</strong></a></li>
                    </ul><span class="navbar-text actions"> <a href = "index.html"> <button class="btn btn-light action-button" type="button" data-toogle="modal" data-target="#modal"><i class="fa fa-sign-out" style="font-size:26px;"></i>Log Out.</button></a></span></span>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 style="margin-top:0px;font-family:'Gentium Book Basic', serif;">CEO Dashboard.</h2>
            </div>
        </div>
        <ol class="breadcrumb" style="background-color:#f1655c;margin-top:10px;">
            <li class="breadcrumb-item"><a href="index.html"><span>Home</span></a></li>
            <li class="breadcrumb-item"><a href="login.html"><span>LogIn&nbsp;</span></a></li>
            <li class="breadcrumb-item"><a href="nivice.html"><span>CEO Panel.</span></a></li>
        </ol>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="card" style="background-color:#b7e5eb;">
                    <div class="card-header" style="background-color:rgba(181,24,109,0.59);">
                        <h5 class="mb-0">Navigation&nbsp;</h5>
                    </div>
                    <div class="card-body">
                        <div class="list-group"><a class="list-group-item list-group-item-action list-group-item-info active"><span><strong>Home</strong></span></a><a class="list-group-item list-group-item-action" href = "addDoc.php"><span><strong>Add Doctor.</strong></span></a>
                            <a
                                class="list-group-item list-group-item-action" data-target = "#addHospital" data-toggle = "modal"><span><strong>Add Hospital</strong></span></a><a class="list-group-item list-group-item-action" href="doctor.php"><span><strong>Doctor Table</strong></span></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div>
                    <div class="card">
                        <div class="card-header" style="background-color:#b5186d;">
                            <h5 class="mb-0">Major Operations ....</h5>
                        </div>
                        <div class="card-body" style="background-color:#b7e5eb;">
                            <div class="row">
                                <div class="col">
                                    <div class="card" data-bs-hover-animate="jello" style="background:linear-gradient(90deg, #11998e 0%, #38ef7d 100%);" data-toggle="modal" data-target="#modal">
                                        <div class="card-body" style="color:rgb(254,255,255);">
                                            <p style="color:rgb(249,249,249);"><i class="fa fa-search" style="font-size:50px;"></i>&nbsp; &nbsp; &nbsp; &nbsp;search for&nbsp;</p>
                                            <p style="color:rgb(255,252,252);"><strong>Doctor</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col"><a href = "viewAppointmentsCEO.php">
                                    <div class="card" style="background:linear-gradient(90deg , #45b649 0%, #dce35b 100%);color:rgb(255,255,255);">
                                        <div class="card-body" style="color:rgb(255,255,255);">
                                            <p style="color:rgb(255,255,255);"><i class="fa fa-book" style="font-size:50px;"></i>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; view&nbsp;</p>
                                            <p style="color:rgb(255,255,255);"><strong>Appointments.</strong></p>
                                        </div>
                                    </div></a>
                                </div>
                                <div class="col"><a href = "comments.html">
                                    <div class="card" style="background:linear-gradient(90deg,#3f5efb 0%, #fc466b 100%);">
                                        <div class="card-body">
                                            <p style="color:rgb(255,255,255);"><i class="fa fa-comments" style="font-size:50px;"></i>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Message</p>
                                            <p style="color:rgb(255,255,255);"><strong>Board.</strong></p>
                                        </div>
                                    </div></a></div>
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
                                <th class="th" style="color:rgb(255,255,255);">Doctor Name</th>
                                <th style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;color:rgb(255,255,255);">Patient Name</th>
                                <th class="th" style="color:rgb(255,253,253);">Time&nbsp;</th>
                                <th class="th" style="color:rgb(254,254,254);">Hospital&nbsp;</th>
                                <th style="color:rgb(255,246,246);">Appointmant Date</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
							
							       $sql = " select concat(doctor_details.Fname,'  ', doctor_details.Lname) as doctor_names, concat(patient_details.Fname, ' ',patient_details.Lname) as Patient_Name, appointments_booked.time_slot, appointments_booked.appointmant_date from  appointments_booked inner join doctor_details on appointments_booked.doc_id =  doctor_details.doc_id  inner join patient_details on  appointments_booked.patient_id =  patient_details.patient_id ;";
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
								<td>Kiambu Hoapital</td>
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
                                <td><em>FIRST NAME .</em><br></td>
                                <td><em>SECOND NAME.</em><br></td>
                                <td><em>TIME</em>&nbsp;<br></td>
                                <td><em>PATIENT ID&nbsp;</em><br></td>
                                <td>Appoinment date</td>
                                
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
	<div role="dialog" tabindex="-1" class="modal fade" id="addHospital">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#1aa0be;">
                <h4 class="modal-title">Add Hospital:</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body" style="background-color:#efe8e8;">
                <form action="ceo.php" method="post">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><strong>Name:</strong></span></div><input type="text" class="form-control"  required placeholder = "Name." name = "name"/>
                            <div class="input-group-append"></div>
                        </div>
                    </div>
                   <div class="form-group"><label><strong>Hospital Level:</strong></label><select class="form-control" name="level"><option value="4">Level 4</option><option value="5">Level 5</option></select></div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><strong>Location :</strong></span></div><input type="text" class="form-control" name = "location" required placeholder = "Location."/>
                            <div class="input-group-append"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-6 offset-3"><button class="btn btn-success btn-block btn-lg" type="submit" style="color:rgb(255,255,255);background-color:rgb(103,161,7);" name = "addHospital"><strong>Add Hospital</strong></button></div>
                    </div>
                </form>
            </div>
            <div class="modal-footer" style="background-color:#1aa0be;"><button class="btn btn-danger" type="button" data-dismiss="modal" style="color:rgb(255,254,254);background-color:rgb(255,74,85);">Close</button></div>
        </div>
    </div>
</div>
    <div class="modal fade" role="dialog" tabindex="-1" id="modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Doctor Search .</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <p>Please Insert The Patient Id Then Search.</p>
                    <form action="ceo.php" method="post">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i>&nbsp;ID</span></div><input class="form-control" type="text" name="doctor_id">
                                <div class="input-group-append"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6 offset-sm-3"><button class="btn btn-primary btn-block" type="submit" style="background-color:rgb(52,114,247);color:rgb(252,252,252);" name = "search"><strong>Search</strong></button></div>
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