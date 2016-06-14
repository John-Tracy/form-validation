<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Form Feedback</title>
</head>
<body>
<?php # handle_form.php #4

// validatethename: 
if (!empty($_POST['name'])) {
	$name = $_POST['name'];
} else {
	$name= NULL;
	echo '<p class="error">You forgot to enter your name!</p>';
}

// Validate the email:
if (!empty($_POST['email'])) {
	$email = $_POST['email'];
} else {
	$email = NULL;
	echo '<p class="error">You forgot to enter your email address!</p>';
}

// Validate the comments:
if (!empty($_POST['comments'])) {
	$comments = $_POST['comments'];
} else {
	$comments = NULL;
	echo '<p class="error">You forgot to enter your comments!</p>';
}

// Validate the gender:
if (isset($_POST['gender'])) {
	
	$gender = $_POST['gender'];

	switch ($gender) {

		case 'M': // executes if the user choose the male option
		echo '<p><b>Good day, Sir!</b></p>';
		break;

		case 'F': // executes if the user choose the female option
		echo '<p><b>Good day, Madam!</b></p>';
		break;
	
		default:   // unacceptable value
		echo '<p class="error">Gender should be either "M" or "F"!</p>';
		break;

	}

}	else { // $_REQUEST['gender'] is not set
	$gender = NULL;
	echo '<p class="error">You forgot to tselect your gender!</p>';
}


// Validate the age choices.

$age = $_POST['age'];

switch ($age) {

	case '0-29':
		echo '<p>You are 29 years of age or younger.</p>';
		break;

	case '30-60':
		echo '<p>You are between the ages 30 and 60 years of age.</p>';
		break;

	case '60+':
		echo '<p>You are 60 years of age or more.</p>';
		break;
	default:
		echo '<p>Incorrect age input.</p>';
		break;

}

// If everything is filled out correctly, this message will be displayed

if ($name && $email && $gender && $comments) {
	
	echo "<p>Thank you, <b>$name</b>, for the following comments:</br>
			<tt>$comments</tt></p>
			<p>We will reply to you at <i>$email</i>.</p>\n";

} else {
	echo '<p class="error">Please go back and fill out the form again.</p>';
}

?>
</body>
</html>
