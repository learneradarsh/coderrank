<?php
include_once 'dbconnection.php';
$email = $_GET['email'];
$key = $_GET['key'];
$query = "UPDATE signup SET code='active' WHERE (email ='$email' AND code='$key')";
$result = mysqli_query($con, $query) or die(mysqli_error($con)) ;
if(mysqli_affected_rows($con) == 1)
{
	$print="Welcome, your accout has been activated succefully";
	header('Location:index.php?q2=$print');
}
	
else
{
	$print="Some Error occured";
	echo $print;
}

?>