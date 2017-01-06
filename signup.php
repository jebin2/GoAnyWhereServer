<?php

$con=mysqli_connect("localhost","jebin","JebinEinstein!1","temp");
    if (mysqli_connect_errno($con)) {
    	echo "Please try again later";
   }

    $Name 		 = $_POST['name'];
    $UserName 	 = $_POST['username'];
	$Password 	 = $_POST['password'];
	$Gender 	 = $_POST['gender'];
	$Mailid 	 = $_POST['mailid'];
	$PhoneNumber = $_POST['phonenumber'];
	$DateOfBirth = $_POST['dateofbirth'];

	if($Name!=null&&$UserName!=null&&$Password!=null&&$Gender!=null&&$Mailid!=null&&$PhoneNumber!=null&&$DateOfBirth!=null){

		$result = mysqli_query($con,"SELECT `username` FROM `temp1` where username = '$UserName'");
		
		if(mysqli_num_rows($result)>0){
			$row = mysqli_fetch_assoc($result);
			$UserNameTest = $row["username"];	
		}
		else {
			$UserNameTest = null;		
		}
		if($UserNameTest==null){
		$UserNameTest = null;
				$ProfileInsert="INSERT INTO temp1 VALUES ('$Name','$UserName','$Password','$Gender','$Mailid','$PhoneNumber','$DateOfBirth')";
				if(mysqli_query($con,$ProfileInsert)){
					//true
					echo "ok";
				}
				else {
					//false
					echo "please try again";
				}
			}
		else {
			echo "aleardy exists";
		}

	}
	else {
		echo "fill all the field";
	}

?>
