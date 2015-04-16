<?php
	$name = strip_tags($_REQUEST['name']);
	$email = strip_tags($_REQUEST['email']);
	$message = strip_tags($_REQUEST['message']);
	mail("ohrtemimimschool@gmail.com", "From OhrTemimimSchool.com", $message, "From: $email" );
	header('Location: http://www.ohrtemimimschool.com');
	exit();
	?>