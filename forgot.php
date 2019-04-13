<?php
	extract($_POST);
	$conn=mysqli_connect("localhost","root","") or die($mysqli_error);
	mysqli_select_db($conn,"assgn1");
	$query="select pswd from users where forgot='$forgot' and uname='$uname'";
	$res=mysqli_query($conn,$query);
	$row=mysqli_fetch_assoc($res);
	print("<center><h1> Your password is:  ");
	
	print_r($row["pswd"]);
	print("<br>");
	print("Dont share with anyone</h1></center>");
	
	
?>