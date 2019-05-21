<?php
	session_start();
	$errors2 = null;
	$token = null;
	include('phpFiles/databaseConnection.php');
	if($_SERVER['REQUEST_METHOD']== "POST"){
		      	$fname = 				 $_SESSION["fName"];    
                $lName =            	 $_SESSION["lName"];	
                $surName =          	 $_SESSION["surName"];     
                $date =             	 $_SESSION["date"];	
                $birthCertNumber =   	 $_SESSION["birthCertNumber"];
                $nhifNumber  =       	 $_SESSION["nhifNumber"];	
                $kraNumber  =       	 $_SESSION["kraNumber"];	
                $email =              	 $_SESSION["email"];	
                $phone =            	 $_SESSION["phone"];	
                $callTime  =        	 $_SESSION["callTime"];	
                $residence =        	 $_SESSION["residence"];
				$errors2 = array();
				
				$token = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFHJKLZXCVBNM0123456789!@$%^&*/-+";
				$token = str_shuffle($token);
				$token = substr($token);
				
				//MAILING DETAILS :
				
				$to = $email;
				$subject = "PLEASE CONFIRM YOUR ACCOUNT SO AS TO LOG IN.";
				$headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				$msg = " <html> <a href = \"georekariuki.tk/login.php?email=".$email."&token=".$token."\"></html>";
				
				if(!(isset($_POST['checkConfirm']))){
					array_push($errors2 , "Please check confirmation Box To register.");
				}
				else{
				
			 if($conn){
				  $last_id = mysqli_insert_id($conn);
				  $_SESSION['last_id']= $last_id;
		  $sql = "insert into patient_details(Fname,Lname,SurName,phone_number,email,Residence,birthCertificateNumber,kraNumber,NhifNumber,callTime,Date_Of_Birth) values('".$fname. "','".$lName."','".$surName."','".$phone."','".$email."','".$residence."','".$birthCertNumber."','".$kraNumber."','".$nhifNumber."','".$callTime."','".$date ."');";
	      $valid = mysqli_query($conn,$sql);
		  if($valid){
			  mail($to,$subject,$msg,$headers);
			  header('Location:setpassword.html'); 
		  }
		  else{
			  mysqli_error($conn);
		  }
	  }
	  else{
		  die("The database connection was not successful.");
	  }
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/Analog_Clock.css">
    <link rel="stylesheet" href="assets/css/Basic-fancyBox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-v2-Modal--Full-with-Google-Map.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Dark-1.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Navbar-Fixed-Side.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/OcOrato---Login-form.css">
    <link rel="stylesheet" href="assets/css/OcOrato---Login-form1.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer-1.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer-2.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
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
    <div style="margin-bottom: 85px;">
        <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-info navigation-clean-button" style="background-color:rgb(10,57,222);">
            <div class="container"><a class="navbar-brand" href="index.html" id="brandInSmall" style="font-family:Times New Roman;"><i class="fa fa-stethoscope" style="font-size:42px;color:rgb(226,22,22);"></i>&nbsp; &nbsp; Hospital System.</a><button class="navbar-toggler"
                    data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="index.html" style="color:rgb(11,12,12);font-size:20px;font-family:Times New Roman;"><strong>Home .</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="about.html" style="color:rgb(0,0,0);font-size:20px;font-family:Times New Roman;"><strong>About </strong>.</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="contacts.html" style="color:rgb(1,1,1);font-size:20px;font-family:Times New Roman;"><strong>Contacts.</strong></a></li>
                        <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="color:rgb(0,0,0);font-size:20px;font-family:Times New Roman;"><strong>Locations</strong></a>
                            <div class="dropdown-menu"
                                role="menu"><a class="dropdown-item" role="presentation" href="locations.html"><strong>Nairobi</strong></a><a class="dropdown-item" role="presentation" href="locations.html"><strong>Mombasa</strong></a><a class="dropdown-item" role="presentation"
                                    href="locations.html"><strong>Kisumu</strong></a></div>
                        </li>
                    </ul><span class="navbar-text actions"> <a href="login.php" class="login" style="color:rgba(55,60,184,0.9);font-family:Times New Roman;"><strong>Patient Log In</strong></a><a class="btn btn-info action-button" role="button" href="sighnup.php" data-bs-hover-animate="bounce">Sign Up</a></span></div>
            </div>
        </nav>
    </div>
    <div style="background-color:#d3e4f8;">
        <div class="container" style="background-color:#d3e4f8; font-family:&quot;Times New Roman&quot;">
            <h1 style="font-family:times new roman;text-align:center;">Please Confirm Your Details .</h1>
			<?php
			      	        if(!empty($errors2)){
				foreach($errors2 as $key){
					echo "<div class=\"alert alert-danger\">
  <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
  <strong>Warning!</strong>".$key."
</div>";
				}
			}
			?>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h2>Names: &nbsp; &nbsp; &nbsp;<span style="font-size:26px; color:red;"><?php echo $_SESSION["fName"]. " ".$_SESSION["lName"]." ".$_SESSION["surName"]."." ;?></span></h2>
                    <h3>Birth Certificate Number: &nbsp; &nbsp; &nbsp;<span style="font-size:26px; color:red;"><?php echo $_SESSION["birthCertNumber"];?></span></h3>
                    <h2>NHIF Number: &nbsp; &nbsp; &nbsp;<span style="font-size:26px; color:red;"><?php echo $_SESSION["nhifNumber"];?></span></h2>
                    <h2>Residence: &nbsp; &nbsp; &nbsp;<span style="font-size:26px; color:red;"><?php echo $_SESSION["residence"];?></span></h2>
                    <h2>Phone Number: &nbsp; &nbsp; &nbsp;<span style="font-size:26px; color:red;"><?php echo $_SESSION["phone"];?></span></h2>
                    <h2>Date Of Birth: &nbsp; &nbsp; &nbsp;<span style="font-size:26px;color:red;"><?php echo $_SESSION["date"];?></span></h2>
                    <h2>KRA Number: &nbsp; &nbsp; &nbsp;<span style="font-size:26px;color:red;"><?php echo $_SESSION["kraNumber"];?></span></h2>
                    <h2>Email Address: &nbsp; &nbsp; &nbsp;<span style="font-size:26px;color:red;"><?php echo $_SESSION["email"];?></span></h2>
                    <form action="confirmation.php" method="post">
                        <div class="form-group">
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1" name = "checkConfirm"><label class="form-check-label" for="formCheck-1">Check To Confirm That The Data Above are Your Personal Details To Continue .</label></div>
                        </div>
                        <div class="form-group">
                            <div class="form-row" style="margin-top: 20px; margin-bottom: 20px;">
                                <div class="col"><a class="btn btn-danger btn-block" role="button" href="sighnup.html"><i class="fa fa-backward"></i><strong>&nbsp; EDIT DETAILS</strong></a></div>
                                <div class="col"><button class="btn btn-success btn-block" type="submit" id="verify"><strong>NEXT&nbsp;</strong><i class="fa fa-forward" style="background-color:rgba(0,0,0,0);color:rgb(255,255,255);"></i></button></div>
                            </div>
                        </div>
                    </form>
                </div>
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
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/Basic-fancyBox-Gallery2.js"></script>
    <script src="assets/js/Analog_Clock.js"></script>
    <script src="assets/js/Contact-Form-v2-Modal--Full-with-Google-Map.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="assets/js/jquery.validate.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/new.js"></script>
    <script src="assets/js/Sortable-filter-gallery-portfolio.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="assets/js/jquery-3.3.1.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
    <script src="assets/js/validation.js"></script>
</body>

</html>