<?php
	function send_host(){
		// get the posted data
		$name = $_POST['name'];
		$email = $_POST['email'];
		$arival_date = $_POST['arival_date'];
		$departure_date = $_POST['departure_date'];
		$chooseAdults = $_POST['chooseAdults'];
		$chooseChildren = $_POST['chooseChildren'];
		$comments = $_POST['message'];
		
		// write the email content

		//$to  = 'ask.macky.miro@gmail.com' . ', '; // note the comma
		// Always set content-type when sending HTML email
		$to = 'jesjor@outlook.co.nz';
		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From: ".$name." <".$email.">\r\n"; 
		$rd = rand();
		$message ="<!DOCTYPE html>
					<html>
					<head>
					<title>Casa-Alegria-Bohol</title>
					</head>
					<body>
					<div style='width:960px; border:1px solid #ccc;'>
						<div style='width:960px;'>
							<a href='http://www.springrainglobal.com/casa-alegria-bohol/' target='_blank' rel='nofollow' >
								<img alt='Casa Alegria-Bohol Logo' src='http://springrainglobal.com/casa-alegria-bohol/wp-content/themes/casa-alegria-bohol/images/header/casa-logo-new.png' />
							</a>
							
						</div>
						<div style='margin-left:40px; margin-top:80px;'>
						<p style='font-family:arial; font-size:15px;'>Booking Number: #".$rd."</p>
						<br>
						<br>
						<p style='font-family:arial; font-size:13px;'><strong>Name :</strong>".$name." </p> 
						<p style='font-family:arial; font-size:13px;'><strong>Email :</strong>".$email." </p> 
						<p style='font-family:arial; font-size:13px;'><strong>Arrival Date :</strong>".$arival_date." </p> 
						<p style='font-family:arial; font-size:13px;'><strong>Departure Date :</strong>".$departure_date." </p> 
						<p style='font-family:arial; font-size:13px;'><strong>Adults :</strong>".$chooseAdults." </p> 
						<p style='font-family:arial; font-size:13px;'><strong>Children :</strong>".$chooseChildren." </p> 
						<p style='font-family:arial; font-size:13px;'><strong>Message :</strong>".$comments." </p> 
						</div>
					</div>
					</body>
					</html>
				";
		// Send
		mail($to, 'BOOKING INQUIRY | CASA Alegria-Bohol', $message,$headers);
		
		echo "<p style='color:green; font-size:18px;'>Your Booking Inquiry Has Been Sent!</p>";
		echo "<br>";
		echo "<a href='http://www.springrainglobal.com/casa-alegria-bohol/'>Homepage</a>";
							
	}
	
	send_host();


?>


