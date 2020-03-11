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
$reserve_dt = mysqli_real_escape_string($link, $_REQUEST['reserve_dt']);
$start_time = mysqli_real_escape_string($link, $_REQUEST['start_time']);
$end_time = mysqli_real_escape_string($link, $_REQUEST['end_time']);

$equipname = mysqli_real_escape_string($link, $_REQUEST['equipname']);
$equipqty = mysqli_real_escape_string($link, $_REQUEST['equipqty']);
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$year = mysqli_real_escape_string($link, $_REQUEST['year']);
$course = mysqli_real_escape_string($link, $_REQUEST['course']);

// Attempt insert query execution
$sql = "INSERT INTO tbl_reserve (reserve_dt,start_time,end_time,equipname,equipqty,name,year,course) VALUES ('$reserve_dt','$start_time','$end_time','$equipname','$equipqty','$name','$year','$course')";
if(mysqli_query($link, $sql)){
    echo"<script>window.open('dashboard.php?success=Send successfully','_self')</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>