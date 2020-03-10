<?php
	$mail_to = 'yourEmail@gmail.com'; //Replace with your Email
	
	//Contact Form Submission
	if($_POST['contact_form'] == 'YES') { 
		$message = '<table><tr><td>';
		$message .= 'First Name</td><td>';
		$message .= $_POST['first-name'];
		$message .= '</td></tr><tr><td>Last Email</td><td>';
		$message .= $_POST['last-name'];
		$message .= '</td></tr><tr><td>Your Email</td><td>';
		$message .= $_POST['your-email'];
		$message .= '</td></tr>';
		
		$message .= '<tr><td>Subject</td><td>';
		$message .= $_POST['subject'];
		$message .= '</td></tr>';
		
		$message .= '<tr><td>Course</td><td>';
		$message .= $_POST['course'];
		$message .= '</td></tr>';
		
		$message .= '<tr><td>Teacher</td><td>';
		$message .= $_POST['teacher'];
		$message .= '</td></tr>';
		
		$message .= '<tr><td>Your Message</td><td>';
		$message .= $_POST['your-message'];
		$message .= '</td></tr>';
		
		$message .= '</table>';
			
		$subject = "Contact Form Submission";
		
		send_email($message, $mailto, $subject);
		
		$redirect_to = $_GET["ref"];
		
		HEADER("LOCATION: ".$redirect_to);	
	}
	
	//Footer Form submission
	if($_POST['form_submission'] == 'YES') { 
		$message = '<table><tr><td>';
		$message .= 'Your Name</td><td>';
		$message .= $_POST['your_name'];
		$message .= '</td></tr><tr><td>Your Phone</td><td>';
		$message .= $_POST['your_phone'];
		$message .= '</td></tr></table>';
		
		$subject = "Footer Email Submission";
		
		send_email($message, $mailto, $subject);
		HEADER("LOCATION: thankyou.html");	
	}
	 
	function send_email($message, $mailto, $subject) { 
		//getting set email addresses from database.
		$from_email = "youremail@yourdomain.com";
		$reply_to 	= "youremail@yourdomain.com";
		
		$mailheaders = "From:".$from_email;
		$mailheaders .="Reply-To:".$reply_to;
		$from = $from_email;
	
		$headers = "FROM: ".$from;
				$semi_rand = md5(time());
				$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
		
				$headers .= "\nMIME-Version: 1.0\n" .
				"Content-Type: multipart/mixed;\n" .
				" boundary=\"{$mime_boundary}\"";
		
				$message .= "This is a multi-part message in MIME format.\n\n" .
				"--{$mime_boundary}\n" .
				"Content-Type:text/html; charset=\"iso-8859-1\"\n" .
				"Content-Transfer-Encoding: 7bit\n\n" .
				$message . "\n\n";
				$message .= "--{$mime_boundary}\n" .
				"Content-Type: {$fileatt_type};\n" .
				" name=\"{$filename}\"\n" .
				"Content-Transfer-Encoding: base64\n\n" .
				mail($mailto, $subject, $message, $headers);
	}// Send Email Function.