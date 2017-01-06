<?php

$con=mysqli_connect("localhost","jebin","JebinEinstein!1","temp");

    if (mysqli_connect_errno($con)) {
    	echo "Please try again later";
   }

    $UserName 	 = $_POST['username'];
	$Password 	 = $_POST['password'];
	
	if($UserName!=null&&$Password!=null){

		$result = mysqli_query($con,"SELECT `username`,`password` FROM `temp1` where username = '$UserName' and password = '$Password'");
		
		if(mysqli_num_rows($result)>0){
			$row = mysqli_fetch_assoc($result);
			$UserNameTest = $row["username"];
		}
		else {
			$UserNameTest = null;		
		}
		if($UserNameTest==null){
		$UserNameTest = null;
			echo "Please register";
			}
		else {
			echo "ok";
		}

	}
	else {
		echo "fill all the field";
	}

?>
