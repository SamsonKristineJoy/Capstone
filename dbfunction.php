<?php
 
    $con=mysqli_connect('localhost','root','','cbsua');
 
    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>