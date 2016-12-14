<?php
include 'dbconnection.php';
include_once 'dbfunction.php';
$funObj = new dbfunction();
if(isset($_POST['username']))
{
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	$password=md5($password);
	$result= mysqli_query($con,"SELECT * FROM signup WHERE email = '$email' and username='$username'") or die('Error in chking'.mysqli_error($con));
$count=mysqli_num_rows($result);
if($count==0)
{	
	$code=$funObj->sendmail($email);
	$res_register=$funObj->register($username,$email,$password,$code);
	$temp="Please Check your  mail for activation link";
	//header('Location:index.php?q1=$temp');
}
else
{	
	$temp="Already registered";
	header('Location:index.php?q=$temp');
}

}
else if(isset($_POST['username_signin']))
{		
		$username_signin=mysqli_real_escape_string($con,$_POST['username_signin']);
		$password_signin=mysqli_real_escape_string($con,$_POST['password_signin']);
		$password_signin==md5($password_signin);
		$print=$funObj->login($username_signin,$password_signin);
		echo "hurray";
		if($print=='please chk your email to activate your account register.')
		{
			echo 'please chk your email to activate your account register.';
		}
		else if($print=='Wrong Email/Password register')
		{
			echo 'Wrong Email/Password register';
		}
 }
 else
 {
 	echo 'some thing phisy going on register.php..';
 }
 mysqli_close($con);
?>