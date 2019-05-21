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
							    $sql = " select concat(doctor_details.Fname,'  ', doctor_details.Lname) as doctor_names, concat(patient_details.Fname, ' ',patient_details.Lname) as Patient_Name,hospital_details.hospital_name as hospital_name , patient_history.test_perfomed, patient_history.medication,patient_history.date_of_illnaess, patient_history.illness, patient_history.symptoms from  patient_history inner join doctor_details on doctor_details.doc_id =  patient_history.doc_id inner join patient_details on patient_details.patient_id =  patient_history. patient_id inner join  hospital_details on  hospital_details.hospital_id = patient_history.hospital_id where  patient_history.patient_id ='". $_SESSION['patient_id']."';";
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
							<th>Sno</th>
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


 

    

    <footer class="footer fixed-bottom" style="background-color:#1aa0be; padding:20px; ">
        Mona Developers © <?php echo date("Y"); ?>
    </footer>
     <script src="js2/jq1.js"></script>
<script src="bs/js/bootstrap.min.js"></script>
<script src="js2/script.js"></script>

    
   
</body>

</html>