 <?php session_start();
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/Analog_Clock.css">
    <link rel="stylesheet" href="assets/css/Basic-fancyBox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-v2-Modal--Full-with-Google-Map.css">
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
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
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
<body style="background-color:rgb(255,255,255);background-image:url(&quot;none&quot;);">
    <div class="navbar" style="margin-top:10px;">
        <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-info navigation-clean-button" style="background-color:rgb(10,57,222);">
            <div class="container"><a class="navbar-brand" href="index.html" id="brandInSmall" style="font-family:Times New Roman;"><i class="fa fa-stethoscope" style="font-size:42px;color:rgb(226,22,22);"></i>&nbsp; &nbsp; Hospital System.</a><button class="navbar-toggler"
                    data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="index.html" style="color:rgb(11,12,12);font-size:20px;font-family:Times New Roman;"><strong>Home .</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="about.html" style="color:rgb(0,0,0);font-size:20px;font-family:Times New Roman;"><strong>About </strong>.</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="contacts.html" style="color:rgb(1,1,1);font-size:20px;font-family:Times New Roman;"><strong>Contacts.</strong></a></li>

                            <div class="dropdown-menu"
                                role="menu"><a class="dropdown-item" role="presentation" href="locations.html"><strong>Nairobi</strong></a><a class="dropdown-item" role="presentation" href="locations.html"><strong>Mombasa</strong></a><a class="dropdown-item" role="presentation"
                                    href="locations.html"><strong>Kisumu</strong></a></div>
                        </li>
                    </ul><span class="navbar-text actions"> <a href="login.php" class="login" style="color:rgba(55,60,184,0.9);font-family:Times New Roman;"><strong> Log In</strong></a><a class="btn btn-info action-button" role="button" href="#" data-bs-hover-animate="bounce">Sign Up</a></span></div>
            </div>
        </nav>
    </div>
    <div style="background-color:#d3e4f8;">
        <div class="container-fluid">
            <h1 style="font-family:times new roman;text-align:center;">Registration Form.</h1>
            <hr>
			<?php
			      	        if(!empty($errors)){
				foreach($errors as $key){
					echo "<div class=\"alert alert-danger\">
  <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
  <strong>Warning!</strong>".$key."
</div>";
				}
			}
			?>
            <form action="sighnup.php" method="post" id="contactForm"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com"><input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form"><input class="form-control" type="hidden"
                    name="to" value="email@awebsite.com">
                <div class="form-row">
                    <div class="col-md-6">
                        <div id="successfail"></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-8 offset-md-2" id="message">
                        <h2 class="h4" style="font-family:times new roman;text-align:center;">Fill In the form Below To Register as A patient.</h2>
                        <div class="form-group">
                            <fieldset>
                                <legend style="font-family:'Petit Formal Script', cursive;">Personal Details&nbsp;<span style="font-size:18px;color:rgb(237,59,59);">(*required)</span></legend><label for="from-name">Names&nbsp;</label><span class="required-input">*</span>
                                <div class="form-row">
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                        <div class="form-group invalid"><label for="from-phone">First name</label><span class="required-input">*</span>
                                            <div class="input-group has-danger">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div><input class="form-control has-error" type="text" value = "<?php if(isset($fname)){echo $fname;}?>" name="fName" required="" placeholder="First Name." id="fName"></div>
                                            <span
                                                id="FNameError" style="color:red;"></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                        <div class="form-group"><label for="from-phone">Last Name .</label><span class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div><input class="form-control" type="text" value = "<?php if(isset($lName)){echo $lName;}?>"name="Lname" required="" placeholder="Last Name." autocomplete="on" id="Lname"></div>
                                            <span
                                                id="LNameError" style="color:red;"></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                        <div class="form-group"><label for="from-phone">Sur Name</label><span class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div><input class="form-control" type="text" name="Sname"  value = "<?php if(isset($surName)){echo $surName;}?>" required="" placeholder="Sur Name." autocomplete="on" id="SName"></div>
                                            <span
                                                id="SNameError" style="color:red;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group"><label for="from-phone">Date Of Birth</label><span class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-calendar"></i></span></div><input class="form-control" type="date" name="date" value = "<?php if(isset($date)){echo $date;}?>"required="" id="date"><span id="dateError" style="color:red;"></span></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group"><label for="from-phone">Birth Certificate Number.</label><span class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-certificate"></i></span></div><input class="form-control" type="text" name="birthCertNumber" value = "<?php if(isset($birthCertNumber)){echo $birthCertNumber;}?>"required="" placeholder="Certificate number ." minlength="3"
                                                    autocomplete="on" inputmode="numeric" id="birthCertNumber"></div><span id="BirthCertificateNoError" style="color:red;"></span></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group"><label for="from-phone">NHIF number</label><span class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-id-card"></i></span></div><input class="form-control" type="text" name="nhifNumber" value = "<?php if(isset($nhifNumber)){echo $nhifNumber;}?>"required="" placeholder="NHIF Number" maxlength="3" autocomplete="on"
                                                    inputmode="numeric" id="nhifNumber"></div><span id="NHIFNoError"></span></div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group"><label for="from-phone">KRA Number .</label><span class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-id-card-o"></i></span></div><input class="form-control" type="text" name="kraNumber" value = "<?php if(isset($kraNumber)){echo $kraNumber;}?>"required="" placeholder="KRA Number" autocomplete="on" inputmode="numeric"
                                                    id="kraNumber"></div><span id="KRANoError"></span></div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="form-row">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group"><label for="from-phone">Email </label><span class="required-input">*</span>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope-o" style="background-color:#ffffff;"></i></span></div><input class="form-control" type="text" name="email" value = "<?php if(isset($email)){echo $email;}?>"required="" placeholder="Email Address"
                                            inputmode="email" id="email"></div><span id="EmailError"></span></div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group"><label for="from-calltime">Residence *</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-location-arrow"></i></span><input class="form-control" type="text" name="residence" placeholder="Residence ." id="residence"></div>
                                    </div><span id="ResidenceError" style="color:red;"></span></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group"><label for="from-phone">Phone</label><span class="required-input">*</span>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone"></i></span></div><input class="form-control" type="text" name="phone" value = "<?php if(isset($phone)){echo $phone;}?>" required="" placeholder="Primary Phone" inputmode="tel" id="phone"></div><span id="phoneError"></span></div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group"><label for="from-calltime">Best Time to Call</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></div><select class="form-control" name="callTime" id="callTime"><optgroup label="Best Time to Call"><option value="Morning" selected="">Morning</option><option value="Afternoon">Afternoon</option><option value="Evening">Evening</option></optgroup></select></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col"><button class="btn btn-warning btn-block" type="reset"><i class="fa fa-undo"></i> Reset</button></div>
                                <div class="col"><button class="btn btn-success btn-block submit" type="submit" id = "submit"><strong>NEXT&nbsp;</strong><i class="fa fa-forward" style="background-color:rgba(0,0,0,0);color:rgb(255,255,255);"></i></button></div>
                            </div>
                        </div>
                        <hr class="d-flex d-md-none">
                    </div>
                </div>
            </form>
        </div>
        <div class="modal fade" role="dialog" tabindex="-1" id="modal1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Contact Information</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                    <div class="modal-body">
                        <form action="javascript:void(0);" method="get" id="contactForm"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com"><input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form"><input class="form-control"
                                type="hidden" name="to" value="email@awebsite.com">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div id="successfail"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12 col-md-6" id="message">
                                    <h2 class="h4"><i class="fa fa-envelope"></i> Contact Us<small><small class="required-input">&nbsp;(*required)</small></small>
                                    </h2>
                                    <div class="form-group"><label for="from-name">Name</label><span class="required-input">*</span>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user-o"></i></span></div><input class="form-control" type="text" name="name" required="" placeholder="Full Name" id="from-name"></div>
                                    </div>
                                    <div class="form-group"><label for="from-email">Email</label><span class="required-input">*</span>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope-o"></i></span></div><input class="form-control" type="text" name="email" required="" placeholder="Email Address" id="from-email"></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                            <div class="form-group"><label for="from-phone">Phone</label><span class="required-input">*</span>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone"></i></span></div><input class="form-control" type="text" name="phone" required="" placeholder="Primary Phone" id="from-phone"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                            <div class="form-group"><label for="from-calltime">Best Time to Call</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></div><select class="form-control" name="call time" id="from-calltime"><optgroup label="Best Time to Call"><option value="Morning" selected="">Morning</option><option value="Afternoon">Afternoon</option><option value="Evening">Evening</option></optgroup></select></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group"><label for="from-comments">Comments</label><textarea class="form-control" rows="5" name="comments" placeholder="Enter Comments" id="from-comments"></textarea></div>
                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col"><button class="btn btn-primary btn-block" type="reset"><i class="fa fa-undo"></i> Reset</button></div>
                                            <div class="col"><button class="btn btn-primary btn-block" type="submit">Submit <i class="fa fa-chevron-circle-right"></i></button></div>
                                        </div>
                                    </div>
                                    <hr class="d-flex d-md-none">
                                </div>
                                <div class="col-12 col-md-6">
                                    <h2 class="h4"><i class="fa fa-location-arrow"></i> Locate Us</h2>
                                    <div class="form-row">
                                        <div class="col-12">
                                            <div class="static-map"><a href="https://www.google.com/maps/place/Daytona+International+Speedway/@29.1815062,-81.0744275,15z/data=!4m13!1m7!3m6!1s0x88e6d935da1cced3:0xa6b3e1bc0f2fc83a!2s1801+W+International+Speedway+Blvd,+Daytona+Beach,+FL+32114!3b1!8m2!3d29.187028!4d-81.0703076!3m4!1s0x88e6d949a4cb8593:0x1387c6c0b5c8cc97!8m2!3d29.1851681!4d-81.0705292"
                                                    target="_blank" rel="noopener"> <img class="img-fluid" src="http://maps.googleapis.com/maps/api/staticmap?autoscale=2&amp;size=600x210&amp;maptype=roadmap&amp;format=png&amp;visual_refresh=true&amp;markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C582+1801+W+International+Speedway+Blvd+Daytona+Beach+FL+32114&amp;zoom=12" alt="Google Map of Daytona International Speedway"></a></div>
                                        </div>
                                        <div class="col-sm-6 col-md-12 col-lg-6">
                                            <h2 class="h4"><i class="fa fa-user"></i> Our Info</h2>
                                            <div><span><strong>Name</strong></span></div>
                                            <div><span>email@awebsite.com</span></div>
                                            <div><span>www.awebsite.com</span></div>
                                            <hr class="d-sm-none d-md-block d-lg-none">
                                        </div>
                                        <div class="col-sm-6 col-md-12 col-lg-6">
                                            <h2 class="h4"><i class="fa fa-location-arrow"></i> Our Address</h2>
                                            <div><span><strong>Office Name</strong></span></div>
                                            <div><span>55 Icannot Dr</span></div>
                                            <div><span>Daytone Beach, FL 85150</span></div>
                                            <div><abbr data-toggle="tooltip" data-placement="top" title="Office Phone: 555-867-5309">O:</abbr> 555-867-5309</div>
                                            <hr class="d-sm-none">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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
                <div class="social-links social-icons"><a href="facebook.com" target="_blank"><i class="fa fa-facebook"></i></a><a href="twitter.com" target="_blank"><i class="fa fa-twitter"></i></a><a href="linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a><a href="github.com"
                        target="_blank"><i class="fa fa-github"></i></a></div>
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
	 <script src = "sighnupValidation.js"></script> 
</body>

</html>