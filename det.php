<!doctype html>
<?php
session_start();

 include('phpFiles/databaseConnection.php');
 if(isset($_POST['upd'])){
	 $res = $_POST['res'];
     $pho = $_POST['phoneNumber'];
     $ema = $_POST['ema'];
     $pas = $_POST['pas'];
	 
	 $sql = "UPDATE patient_details set Residence = '". $res. "', phone_number = ".$pho." , email = '". $ema ."' where patient_id =". $_SESSION['patient_id'].";";
	 $sql2 = "update patient_verification set password = '".$pas."', username = '". $ema."' where patient_id = ". $_SESSION['patient_id'] .";";
	 if($conn){
		 $valid = mysqli_query($conn,$sql);
		 if($valid){
			$valid2 = mysqli_query($conn,$sql2);
			if($valid2){
						  echo "<script src=\"assets/js/jquery.min.js\"></script>";
	   echo "<script>
	                  $(function(){
						  $(\"#confirmationOfDetails\").modal();
					  });
	   </script>";
			}
			else{
				echo "The query to insert the password is broken.". mysqli_error($conn);
			}
		 }
		 else{
			 echo "The update query 1 has aproblem.".mysqli_error($conn);
		 }
	 }
	 else{
		 echo "Databse connection error";
	 }
	 
 }
 ?>
<html>
    <head>
        <title>Portifolio website</title>
        <link rel="stylesheet" href="bs/css/bootstrap.min.css">
        <link href="css2/styles.css" rel="stylesheet">
        <link rel="stylesheet" href="fonts/font-awesome.min.css">
<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
        <link rel="icon" 
      type="image/png" 
      href="assets/img/Hospital-128.png">
    </head>
    <body id="by">

       <div>
 <nav id="j" class="navbar fixed-top" style="background-color:#1aa0be; >
        <div class="container-fluid">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
         <i style="color:white;" id="l" class="fa fa-list fa-2x" ></i> 
         </button>
            <a style="font-size:30px;color:white;" id="a" class ="navbar-brand" href="index.html"> <i class="fa fa-stethoscope" style="font-size:40px;color:rgb(255,10,10);"> </i> &nbsp; &nbsp; Hospiatal System.</a>
        </div>
        <div class="collapse navbar-collapse" id="mynavbar">
        <ul class ="nav navbar-nav navbar-right">
                <li><a style="color:white;" href="index.html">Home</a></li>
                <li><a style="color:white;" href="about.html">About us</a></li>
                <li><a style="color:white;" href="contacts.html">Contact us</a></li>
                <li><a href="index.html" class="btn btn-light action-button" type="button" data-toogle="modal" data-target="#modal">
                            <i class="fa fa-sign-out" style="font-size:26px; color:red;">Log Out.</i>
                            
                        </a></li>
            </ul>
 </div>
    </div>
    </nav>
</div">

<div>
 <form class="form-horizontal"  style="margin-top:75px;" method="POST" role="form" action = "det.php">

    <div class="form-group">
    <label class="control-label col-md-offset-2  col-md-2" for="r">Residence:</label>
    <div class="col-md-5">
      <input type="text" class="form-control" id="r" placeholder="Residence" name="res">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-offset-2  col-md-2" for="p">Phone Number:</label>
    <div class="col-md-5">
      <input type="Text" class="form-control" id="p" maxlength = "10" minlength = "10"placeholder="Phone Number" name="phoneNumber">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-offset-2  col-md-2" for="email">Email:</label>
    <div class="col-md-5">
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="ema">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-offset-2  col-md-2" for="ps">Password:</label>
    <div class="col-md-5">
      <input type="password" class="form-control" id="ps" placeholder="Enter Password" name="pas" maxlength = "8" minlength = "8">
    </div>
  </div>
 
  <div>
    <button type="Reset" class="btn btn-danger col-xs-2 col-md-offset-4 col-md-1">Reset</button>
    <button type="submit" class="btn btn-success col-xs-offset-8 col-xs-2 col-md-offset-3 col-md-1" name="upd">Update</button>
   
  </div>
  
</form>



</div>

  <div role="dialog" tabindex="-1" class="modal fade" id="confirmationOfDetails">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#1aa0be;">
                <h4 class="modal-title">Confirmation !!!</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body">
                <p style="color:rgb(0,0,0);">You have Successfully Updated Detail</p>
            </div>
            <div class="modal-footer" style="background-color:#1aa0be;"><button class="btn btn-danger" type="button" data-dismiss="modal" style="color:rgb(255,255,255);background-color:rgb(255,74,85);">Close</button></div>
        </div>
    </div>
</div>  

    <footer class="footer fixed-bottom" style="background-color:#1aa0be; padding:20px; ">
        Mona Developers © <?php echo date("Y"); ?>
    </footer>
     <script src="js2/jq1.js"></script>
<script src="bs/js/bootstrap.min.js"></script>
<script src="js2/script.js"></script>

    
   
</body>

</html>