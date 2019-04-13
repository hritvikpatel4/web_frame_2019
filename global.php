<?php
	/*define("HOSTNAME","localhost");
	define("PASSWORD","helloworld");
	define("USERNAME","");
	define("DATABASE","web2018");*/
	$con = mysqli_connect("localhost","root","");
	if(!$con)
		die("Cannot connect to database");
?>