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

<table id="c" style="margin-top:75px;" class="table table-striped table-bordered table-hover">
 <thead>
 <tr class="info">
    
    <th>Appointment Date</th>
   <th>available From</th>
    <th>available To</th>
    <th>Doctor Name.</th>
     <th>Hospital </th>
    <th>Book Appointment</th> 
       
  </tr>
 </thead>
 
    <tbody>

        <?php
    
    $query = "select availability_date,available_from,available_till,Fname,Lname,surname,hospital_name,availability_id from 
appointment_availability LEFT OUTER JOIN doctor_details on doctor_details.doc_id=appointment_availability.doc_id
LEFT OUTER join hospital_details ON hospital_details.hospital_id = appointment_availability.hospital_id";       
$results = mysqli_query($conn, $query);
//$row = mysqli_fetch_array($results);

        while ($row = mysqli_fetch_array($results))
        {
            ?>
            <tr>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>  
                <td><?php echo $row[3]. ' '. $row[4]. ' '.$row[5] ; ?></td>
                <td><?php echo $row[6]; ?></td> 
				<!--td><?php //echo $row[7]; ?></td--> 
                
                <?php echo "<td><a href=\"appointmentbooked.php?patId= ".$_SESSION['patient_id']."&appointmentId=".$row[7].";\">Book</a></td>"?>
                <!--td><a href="appointmentbooked.php?patId=<?php $_SESSION['patient_id']?>&appointmentId=<?php $row[7];?> ">Book</a></td-->

            </tr>
            <?php
            }

            ?> 
 
    </tbody>
        
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