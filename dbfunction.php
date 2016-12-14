<?php
include 'dbconnection.php';
class dbfunction
{
	public function register($username,$email,$password,$code)
	{	include 'dbconnection.php';
		$query="INSERT INTO signup (username,email,password,code) VALUES('$username','$email','$password','$code')";
		$res=mysqli_query($con,$query) or die(mysqli_error($con));
		return $res;
	}
	public function sendmail($email)
	{
		include 'dbconnection.php';
		$code = md5(uniqid(rand(), true));
		$to=$email;
		$sub="Coderrank Activation Mail";
		$msg="Please click on link to activate your account.\n";
			 $msg.="//activate.php?email=". urlencode($email)."&key=$code";
		$headers="From: Coderrank.\n";
		echo $msg;
		//mail($to,$sub,$msg,$headers);
		return $code;
	}
	public function login($username_signin,$password_signin) 
	{
		include 'dbconnection.php';
		$result= mysqli_query($con,"SELECT * FROM signup WHERE username = '$username_signin' and password = '$password_signin'") or die('Error in login'.mysqli_error($con));
		$count=mysqli_num_rows($result);
		if($count==1)
		{
			$data=mysqli_fetch_array($result) or die('Error in fetching data for login verification');
			if($data['code']=='active')
			{
				session_start();
				$_SESSION['login']=true;
				$_SESSION['username']=$username_signin;
				header("Location:dashboard.php");
			}
			else
			{	
				return 'please chk your email to activate your account register.';

			}
				
		}
		else 
		{
			return 'Wrong Email/Password register';
		}
	}
}
?>