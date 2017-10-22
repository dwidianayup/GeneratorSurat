<?php 

include "koneksidatabase.php";
	$username=$_POST['username'];
	$pass=$_POST['password'];


	$sql="select * from admin where username='$username' and password='$pass'";
	$hasil=mysqli_query($con,$sql);
	$cek=mysqli_num_rows($hasil);
	if ($cek==1) {
		
		session_start();
		$_SESSION['username']=$username;
		header("location:index.php");
	}
	else{

	}
 ?>