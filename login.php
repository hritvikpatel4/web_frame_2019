<?php
	extract($_POST);
	$conn=mysqli_connect("localhost","root","") or die($mysqli_error);
	mysqli_select_db($conn,"assgn1");
	$query="select pswd from users where uname='$user'";
	$res=mysqli_query($conn,$query);
	$row=mysqli_fetch_assoc($res);
	//print_r($row);
	
	if($row["pswd"]==$pass){
		echo "Valid User";
	}
	else{
		echo "Please,Login with correct credentials";
	}
	
	
?>