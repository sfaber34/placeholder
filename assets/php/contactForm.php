<?php

	// Contact
	$to = 'sfaber34@gmail.com';
    $subject = 'Email List Signup';

	if(isset($_POST['c_email'])){
    	$from    = $_POST['c_email'];

		if (mail($to, $subject, $from)) {
			$result = array(
				'message' => 'Thanks for contacting us!',
				'sendstatus' => 1
				);
			echo json_encode($result);
		} else {
			$result = array(
				'message' => 'Sorry, something is wrong',
				'sendstatus' => 1
				);
			echo json_encode($result);
		}
	}

?>
