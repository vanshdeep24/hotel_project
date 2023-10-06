<?php
	$hosting = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'signup';

    $con = mysqli_connect($hosting,$user,$password,$database);
    $sno = $_GET['sno'];
    $q = "DELETE FROM data where sno='$sno'";
    $run = mysqli_query($con,$q);
    if($run)
    {
    	header('location:signup.php');
    }
    else
    {
    	echo "not found";
    }
?>