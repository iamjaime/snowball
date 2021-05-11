<?php
	//Change here
	$to = "JohnDoe@mymail.com";
	//Messages
	$success = "Thank You!";
	$failed  = "Sorry, Something went wrong.";



	//Process Data
	$email 		= $_POST['email'];
	$firstName 	= $_POST['firstName'];
	$lastName 	= $_POST['lastName'];
	$message 	= $_POST['message'];

	$subject = "Receive Email from ".$firstName;

	$message = "<b>First name:</b> ".$firstName." <br/> <b>Last Name:</b> ".$lastName." <br/> <b>Message:</b> ".$message;
	$header = "From: ".$email." \r\n";
	$header .= "Content-type: text/html\r\n";

	$retval = mail ($to,$subject,$message,$header);

	if( $retval == true ) {
		$response = $success;
	}else{
		$response = $failed;
	}
	echo json_encode($response);
?>