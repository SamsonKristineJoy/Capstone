<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "cbsua");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security

//dae nagsasave ang datetime sa database
//display lang
$appointment_dt = mysqli_real_escape_string($link, $_REQUEST['appointment_dt']);
$appointment_time = mysqli_real_escape_string($link, $_REQUEST['appointment_time']);


$fname = mysqli_real_escape_string($link, $_REQUEST['fname']);
$mname = mysqli_real_escape_string($link, $_REQUEST['mname']);
$lname = mysqli_real_escape_string($link, $_REQUEST['lname']);
$department = mysqli_real_escape_string($link, $_REQUEST['department']);
$yr_level = mysqli_real_escape_string($link, $_REQUEST['yr_level']);
$course = mysqli_real_escape_string($link, $_REQUEST['course']);
$purpose = mysqli_real_escape_string($link, $_REQUEST['purpose']);

// Attempt insert query execution
$sql = "INSERT INTO tbl_appoint (appointment_dt,appointment_time,fname,mname,lname,department,yr_level,course,purpose) VALUES ('$appointment_dt','$appointment_time','$fname','$mname','$lname','$department','$yr_level','$course','$purpose')";
if(mysqli_query($link, $sql)){
    echo"<script>window.open('dashboard.php?success=Send successfully','_self')</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>