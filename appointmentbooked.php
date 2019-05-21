<!DOCTYPE html>
<html>
<?php
session_start();
include('phpFiles/databaseConnection.php');
	  $_SESSION['appointmentId'] = $_GET['appointmentId'];
	  
	  $sql = "select concat(Doctor.Fname,' ', Doctor.Lname) as Doctor_Name,availability_date,availability_id, hospital.hospital_name from appointment_availability inner join doctor_details as Doctor using(doc_id) inner join hospital_details as hospital using(hospital_id) where availability_id = ". $_SESSION['appointmentId'] .";";
      if($conn){
		  $valid = mysqli_query($conn, $sql);
		  if($valid){
			  //echo "sucess in query ";
			  while($rows = mysqli_fetch_assoc($valid)){
				  $_SESSION['Doctor_Name'] = $rows['Doctor_Name'];
				  $_SESSION['availability_date'] = $rows['availability_date'];
				  $_SESSION['hospital_name'] = $rows['hospital_name'];
				  $_SESSION['availability_id'] = $rows['availability_id'];
				  
			  }
		  }
		  else{
			  echo "The query has a problem.". mysqli_error($conn);
		  }
		  
		  $sql2 = " select concat(Fname, ' ', Lname, ' ', SurName) as patientName from patient_details where patient_id =". $_SESSION['patient_id'].";";
		  
		  $valid2 = mysqli_query($conn,$sql2);
		  if($valid2){
			  //echo "query is good the second one.";
			  while($rows = mysqli_fetch_assoc($valid2)){
				  $_SESSION['patientName']=$rows['patientName'];
			  }
		  }
		  else{
			  echo mysqli_error($conn);
		  }
	  }
	  else{
		  echo "Connection Error.";
	  }
	  ?>
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

<body>
    <div style="background-image:url(&quot;assets/img/pexels-photo-433267.jpeg&quot;);height:500px;background-position:center;background-size:cover;background-repeat:no-repeat;">
        <div class="d-flex justify-content-center align-items-center" style="height:inherit;min-height:initial;width:100%;position:absolute;left:0;background-color:rgba(30,41,99,0.53);">
            <div class="d-flex align-items-center order-12" style="height:200px;">
                <div class="container">
                    <h1 class="text-center" style="color:rgb(242,245,248);font-size:56px;font-weight:bold;font-family:Roboto, sans-serif;">Efficient Doctor Patient Portal</h1>
                    <h3 class="text-center" style="color:rgb(242,245,248);padding-top:0.25em;padding-bottom:0.25em;font-weight:normal;">Manage Patients Easily And Seamlessly.</h3>
                </div>
            </div>
        </div>
    </div>
	<div role="dialog" tabindex="-1" class="modal fade show" id="confirm" style="display: block;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#f7bfbf;">
                <h4 class="modal-title">Confirm Your Booking.</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body">
                <p style="color:rgb(0,0,0);">Name:<?php echo $_SESSION['patientName'];?></p>
                <p style="color:rgb(0,0,0);">Doctor Name: <?php echo $_SESSION['Doctor_Name']; ?></p>
                <p style="color:rgb(0,0,0);">Date Name:<?php echo $_SESSION['availability_date']; ?></p>
                <p style="color:rgb(0,0,0);">Hospital Name:<?php echo $_SESSION['hospital_name']; ?></p>
                <form method="post" action="confirmBooking.php">
                    <div class="form-row">
                        <div class="col-4 offset-4">
                            <div class="form-group"><button class="btn btn-success" type="submit" style="color:rgb(255,255,255);background-color:rgb(135,203,22);" name = "bookAppointment">Book Appointment.</button></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer" style="background-color:#f7bfbf;"><a href = "book.php"><button class="btn btn-danger" type="button"  style="color:rgb(255,255,255);background-color:rgb(255,74,85);">Back</button></a></div>
        </div>
    </div>
</div>
    <footer class="footer" style="background-color:#1aa0be;margin-top:0px;">
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