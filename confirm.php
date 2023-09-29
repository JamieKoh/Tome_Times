<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="styles/TT_styles.css"/>
	<meta name="keywords" content="authors, e-commerce, services"/>
	<meta name="description" content="This is a website that provides services for authors."/>
	<meta charset="UTF-8"/>
	<meta name="author" content="Jamie Jasmine Koh"/>
	<title>Tome Times confirm page</title>
</head>
<body>
<header class="container">
	<?php include("include/navbar.php"); ?>
</header>
<body id="confirm_page">
	<?php
		if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['street_address']) && isset($_POST['town_address']) && isset($_POST['state']) && isset($_POST['postcode']) && isset($_POST['phone']) && isset($_POST['subject'])) {
			$fname = $_POST['first_name'];
			$lname = $_POST['last_name'];
			$email = $_POST['email'];
			$st_a = $_POST['street_address'];
			$t_a = $_POST['town_address'];
			$state = $_POST['state'];
			$postcode = $_POST['postcode'];
			$phone = $_POST['phone'];
			$subject = $_POST['subject'];
			$comments = $_POST['comments'];
		}
		else{
			echo "Something went wrong. Please fill in the enquiry form again. Apologies for the inconvenience.";
		}
	?>
	<article>
		<p>Almost done. Please confirm your booking by ensuring that all the details you have entered are accurate.</p>
	</article>
	<form id="confirm_form" method="post" action="enquiry_process.php">
		<input type="hidden" name="first_name" value="<?php echo $fname; ?>">
		<input type="hidden" name="last_name" value="<?php echo $lname; ?>">
		<input type="hidden" name="email" value="<?php echo $email; ?>">
		<input type="hidden" name="street_address" value="<?php echo $st_a; ?>">
		<input type="hidden" name="town_address" value="<?php echo $t_a; ?>">
		<input type="hidden" name="state" value="<?php echo $state; ?>">
		<input type="hidden" name="postcode" value="<?php echo $postcode; ?>">
		<input type="hidden" name="phone" value="<?php echo $phone; ?>">
		<input type="hidden" name="subject" value="<?php echo $subject; ?>">
		<input type="hidden" name="comments" value="<?php echo $comments; ?>">
		<fieldset>
			<legend>Personal Details</legend>
				<p>Your First Name: <?php echo $fname; ?></p>
				<p>Your Last Name: <?php echo $lname; ?></p>
				<p>Your Email: <?php echo $email; ?></p>
				<p>Your Street Address: <?php echo $st_a; ?></p>
				<p>Your Town Address: <?php echo $t_a; ?></p>
				<p>Your Postcode: <?php echo $postcode; ?></p>
				<p>Your Phone Number: <?php echo $phone; ?></p>
		</fieldset>
		<fieldset>
			<legend>Enquiry</legend>
				<p>Your Subject Of Enquiry: <?php echo $subject; ?></p>
				<p>Your Comments: <?php echo $comments; ?></p>
		</fieldset>
		<div id="confirm_buttons">		
			<p>
				<input type="submit" value="Confirm Enquiry"/>
				<input type="reset" value="Cancel"/>
			</p>
		</div>
	</form>
<footer>
	<?php include("include/footer.php"); ?>
</footer>
</body>
</html>