<?php
     class viewAppointments{
		 public $databaseConnection = null;
		 	    
	 public function getAppointments(){
		     $this->databaseConnection = new database();
		     $this->databaseConnection->connect();
			 $sql = " select concat(doctor_details.Fname,'  ', doctor_details.Lname) as doctor_names, appointments_booked.appointment_id as appointment_id,appointments_booked.patient_id as patient_id, concat(patient_details.Fname, ' ',patient_details.Lname) as Patient_Name, concat(appointments_booked.appointmant_date , '  ', appointments_booked.time_slot) as timeDate from  appointments_booked inner join doctor_details on appointments_booked.doc_id =  doctor_details.doc_id  inner join patient_details on  appointments_booked.patient_id =  patient_details.patient_id where doctor_details.doc_id = ".$_SESSION['doc_id'].";";
	         $valid = $this->databaseConnection->conn->query($sql);
	  if(!$valid){
		  echo "The query execution is wrong." . $valid->error;  
	  }
	  else{
		   $sno = 0;
		   while($rows = $valid->fetch_object()){
			   $doctor_names =  $rows->doctor_names;
			   $Patient_Name = $rows->Patient_Name;
			   $timeDate = $rows->timeDate;
			   $patient_id = $rows->patient_id;
			   $appointment_id = $rows->appointment_id;
			   $sno++;
			   echo "<tr>
                                <td>$sno</td>
                                <td>$patient_id</td>
                                <td>$Patient_Name</td>
                                <td>$doctor_names</td>
                                <td>$appointment_id</td>
                                <td>$timeDate</td>
                                <td>
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <form action=\"medicalHistory.php?patient_id=$patient_id\" method=\"post\"><button class=\"btn btn-warning\" type=\"submit\" style=\"border-radius:50%;color:rgb(255,254,252);background-color:rgb(255,149,0);\" data-toggle=\"tooltip\" title=\"view\" name=\"view\"><i class=\"fa fa-eye\" style=\"font-size:20px;color:rgb(255,255,255);\"></i></button></form>
                                        </div>
                                        <div class=\"col\">
                                            <form action=\"viewAppointments.php?appointment_id=$appointment_id\" method=\"post\"><button class=\"btn btn-success active\" type=\"submit\" style=\"border-radius:50%\" data-toggle=\"tooltip\" title=\"rescheduel\" name=\"edit\"><i class=\"fa fa-calendar\" style=\"font-size:20px;\"></i></button></form>
                                        </div>
                                        <div class=\"col\">
                                            <form action=\"viewAppointments.php?delete_id=$appointment_id\" method=\"post\"><button class=\"btn btn-danger\" type=\"submit\" style=\"border-radius:50%;color:rgb(255,255,255);background-color:#fb5a5a;\" data-toggle=\"tooltip\" title=\"delete\" name=\"delete\"><i class=\"fa fa-trash\" style=\"font-size:20px;\"></i></button></form>
                                        </div>
                                    </div>
                                </td>
                            </tr>";
			   
			   
		   }
	  } 
	 }
	 }
     
	 ?>