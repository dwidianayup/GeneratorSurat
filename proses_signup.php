<?php 

include "koneksidatabase.php";
	$realname=$_GET['realname'];
	$username=$_GET['username'];
	$pass=$_GET['password'];


	$sql="add to admin where realname='$realname', username='$username' and password='$pass'";
	mysqli_query($con,$sql);
	//$cek=mysqli_num_rows($hasil);
	header("location:index.php");
 ?>