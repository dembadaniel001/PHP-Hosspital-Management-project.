<!doctype html>
<?php
 include('phpFiles/databaseConnection.php');
 $level= null;
 $name= null;
 if(isset($_POST['view'])){
	 $level =  $_GET['hosLevel'];
	 $name =  $_GET['name'];
	 echo "<script src=\"assets/js/jquery.min.js\"></script>";
	   echo "<script>
	                  $(function(){
						  $(\"#services\").modal();
					  });
	   </script>";
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

<div id="g" class="container">

<table id="c" style="margin-top:75px;" class="table table-striped table-bordered table-hover">
 <thead>
 <tr class="info">
    <th> Number.</th>
    <th>Hospital Name</th>
    <th>Hospital Level</th>
    <th>Location</th>
    <th>View Services.</th>   
  </tr>
 </thead>
 
    <tbody>

        <?php
    
    $query = "SELECT hospital_name,level,location FROM 
hospital_details";       
$results = mysqli_query($conn, $query);
//$row = mysqli_fetch_array($results);
$count = 1;
        while ($row = mysqli_fetch_array($results))
        {
            ?>
            <tr>
			      <td> <?php echo $count++; ?> </td>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td> 
                <td> <?php echo "<form action=\"hosp.php?hosLevel=$row[1]&name=$row[0] \" method=\"post\"><button class=\"btn btn-warning\" type=\"submit\" style=\"border-radius:50%;color:rgb(255,254,252);background-color:rgb(255,149,0);\" data-toggle=\"tooltip\" title=\"view\" name=\"view\"><i class=\"fa fa-eye\" style=\"font-size:20px;color:rgb(255,255,255);\"></i></button></form>"?></td>				
            </tr>
            <?php
            }

            ?> 
 
    </tbody>
        
</table> 


</div>

 

 <div role="dialog" tabindex="-1" class="modal fade" id = "services">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#f6aefc;">
                <h4 class="modal-title">The Services offered at : <span style = "color:red"><?php if($name != null){ echo $name;}?></span>   include :</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body">
				  <?php if($level != null){ 
				       $sql = " select service from services_offered where level = $level";
					   $valid = mysqli_query($conn,$sql);
					   $count =1;
					   while($rows = mysqli_fetch_assoc($valid)){
						   $service = $rows['service'];
						    
						   echo "<p>". $count++." $service"."</p>";
					   }
				  }?>
            </div>
            <div class="modal-footer"><button class="btn btn-danger" type="button" data-dismiss="modal" style="color:rgb(255,255,255);background-color:rgb(255,74,85);">Close</button></div>
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