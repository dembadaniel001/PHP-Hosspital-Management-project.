<?php
 include('phpFiles/databaseConnection.php');
 ?>

<?php




if(isset($_POST['upd'])){

$res= $_POST['res'];
$ema= $_POST['ema'];
$pho= $_POST['pho'];
$pas= $_POST['pas'];


$q1="UPDATE patient_details
SET Residence='$res', email='$ema',phone_number='$ema'
WHERE patient_id=34";

//UPDATE patient_details SET Residence='res', email='ema',phone_number='1234' WHERE patient_id=1

$ql2="UPDATE patient_verification
SET username='$ema', password='$pas'
WHERE patient_id=1";
if(mysqli_query($conn,$q1) && mysqli_query($conn,$ql2)){

}
else{
echo "Error: ".mysqli_error($conn);
}
}

?>