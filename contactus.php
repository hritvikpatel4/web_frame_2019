<?php
	extract($_GET);
	//print_r($_GET);
	/*foreach ($_GET as $key=>$value)
	{
		if($value=="")
			echo "please enter your messa

	}*/
	//print_r(array_values($_GET));
	$flag=0;
	foreach(array_values($_GET) as $x){
		$flag=0;
		if($x==""){
			$flag=0;
			
		}
		else
		{
			$flag=1;
			
		}

	}
	if($flag){
		print("<center><h1 style='color:green;'>Message Sent </h1></center>");
	}
	else{
		echo "<center><h1 style='color:red;'>Please Enter Message Properly</h1></center>";
	}

?>