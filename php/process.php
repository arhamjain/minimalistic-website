<script src="js/scripts1.js"></script>
<?php 

	if(isset($_POST['submit'])) {
		$to = "arhamjain619007@gmail.com";
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $headers = "From: " .$email . "\r\n" .
        mail($to,$subject,$message,$headers);
        header("Location: ../contact.html");
	    
	}

?>


