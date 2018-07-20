<?php
$con = mysqli_connect("localhost","root","","hmsdb");
if(isset($_POST['login_submit'])){
$username = $_POST['username'];
$password = $_POST['password'];
$query = "select * from login where username='$username' and password='$password'";
$result = mysqli_query($con,$query)	;
if(mysqli_num_rows($result)==1){
header("Location: admin-panel.php");
}
else{
	//header("Location: index.php");
	echo "<script>alert('Enter correct uname and pwd');</script>";
	echo "<script>window.open('index.php','_self')</script>";
}
}

if(isset($_POST['pat_submit'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$docapp = $_POST['docapp']; //echo $docapp;
	$query="insert into drapp (fname,lname,email,contact,drapp) values('$fname','$lname','$email','$contact','$docapp')";
	if(mysqli_query($con,$query))
	{
		$result = 1;
		echo $result;
	}else{ $result = 0; echo $result;}
	
	if($result != 1){
		echo "<script>alert('Incomplete Details')</script>";
		
	}else{
		echo "<script>alert('Appointment Registered.');</script";
		echo "<script>window.open('admin-panel.php','_self');</script>";

		/* echo "<script>alert('Enter correct uname and pwd');</script>";
	echo "<script>window.open('index.php','_self')</script>"; */
	}
}
?>