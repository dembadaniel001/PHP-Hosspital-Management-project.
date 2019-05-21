<?
    // ADD THE WHERE CLASE IN THE QUERY WITH THE SESSION TRACKING MECHANISMS.
?>
<!doctype html>
<?php
session_start();
 include('phpFiles/databaseConnection.php');
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

<div id="g" class="container">

                    <table class="table table-striped table-bordered table-hover table-dark table-sm">
                        <caption>Oran Donated.</caption>
                        <thead>
                            <tr>
							       <th>Sno</th>
                                <th>Donor Name</th>
                                <th>Gender</th>
                                <th>Date Registered</th>
                                <th>organ Donated</th>
                                
                            </tr>
                        </thead>
                        <tbody>
						
						    <?php 
							    $sql = " select concat(Fname,' ',Lname,' ',Sname) as name,gender,date_registered,organ_donated from organ_donation;";
								$valid2 = mysqli_query($conn,$sql);
								if($valid2){
									$sno = 0;
									while($rows = mysqli_fetch_assoc($valid2)){
										
										$name = $rows['name'];
										$gender=$rows['gender'];
										$date_registered= $rows['date_registered'];	
                                        $organ_donated = $rows['organ_donated'];										
										$sno = $sno+1;
										
										echo "
										
										    <tr>
											<td>$sno</td>
                                    <td>$name</td>
									<td>$gender</td>
									<td>$date_registered</td>
									<td> $organ_donated</td>
                            </tr>
											
										";
										
									}
								}
							?>						                                                    
                        </tbody>
                        <tfoot>
                            <tr>
							<tr>
							       <td>Sno</td>
                                <td>Donor Name</td>
                                <td>Gender</td>
                                <td>Date Registered</td>
                                <td>organ Donated</td>
                                
                            </tr>
                            </tr>
                        </tfoot>
                    </table> 


</div>


 

    

    <footer class="footer fixed-bottom" style="background-color:#1aa0be; padding:20px; ">
        Mona Developers © <?php echo date("Y"); ?>
    </footer>
     <script src="js2/jq1.js"></script>
<script src="bs/js/bootstrap.min.js"></script>
<script src="js2/script.js"></script>

    
   
</body>

</html>