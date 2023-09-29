<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="styles/TT_styles.css"/>
	<meta name="keywords" content="authors, e-commerce, services"/>
	<meta name="description" content="This is a website that provides services for authors."/>
	<meta charset="UTF-8"/>
	<meta name="author" content="Jamie Jasmine Koh"/>
	<title>Tome Times enquiry page</title>
	<script src="scripts/script.js"></script>
</head>
<body>
<header class="container">
	<?php include("include/navbar.php"); ?>
</header>
<article id="enquiry_page">
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "Enquiry";
		
		$dbsql = "CREATE DATABASE IF NOT EXISTS Enquiry";
		$dbconn = mysqli_connect($servername, $username, $password);
		if(!mysqli_query($dbconn, $dbsql)) {
			echo "There was an error that occured while trying to create the database: " . mysqli_error($dbconn);
		}
		
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		
		if(!$conn) {
			die("Connection with database failed. Please try again due to an error: " . mysqli_connect_error());
		}
		
		$tablesql = "CREATE TABLE IF NOT EXISTS EnquiryDetails (
		id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		fname VARCHAR(50) NOT NULL,
		lname VARCHAR(50) NOT NULL,
		email VARCHAR(50) NOT NULL,
		st_a VARCHAR(100) NOT NULL,
		t_a VARCHAR(100) NOT NULL,
		state VARCHAR(30) NOT NULL,
		postcode VARCHAR(30) NOT NULL,
		phone VARCHAR(30) NOT NULL,
		subject VARCHAR(100) NOT NULL,
		comments VARCHAR(300),
		reg_date TIMESTAMP
		)";
		
		if(!mysqli_query($conn, $tablesql)) {
			echo "There was an error while creating the table of enquiry details: " . mysqli_error($conn);
		}
		
		mysqli_close($conn)
	?>
	<h1>Enquiry Form</h1>
	<p>Please fill in the form below and click submit. We'll contact you in three to four working days!</p>
	
<form name="service_form" id="service_form" method="post" action="confirm.php">
	<fieldset>
		<legend>Personal Details</legend>
		<p>
			<!-- First name -->
			<label>First name:</label>
			<input type="text" name="first_name" id="fname" placeholder="Please enter your first name" maxlength="25"/>	
		</p>

		<p>
			<!-- Last name -->
			<label for="lname">Last name:</label>
			<input type="text" name="last_name" id="lname" placeholder="Please enter your last name" maxlength="25"/>	
		</p>

		<p>
			<!-- Email -->
			<label for="email">Email:</label>
			<input type="email" name="email" id="email" placeholder="Please enter your email address" maxlength="25"/>
		</p>
	</fieldset>

	<fieldset>
		<legend>Address</legend>
		<p>
			<!--Street Address-->
			<label for="st_a">Street Address:</label>
			<input type="text" name="street_address" id="st_a" size="40"/>
		</p>

		<p>
			<!--City Address-->
			<label for="t_a">City/Town:</label>
			<input type="text" name="town_address" id="t_a" size="20"/>
		</p>

		<p>
			<!--States Dropdown List-->
			State:
			<select name="state" id="state">
				<option value="none">---</option>
				<script>state_list()</script>
			</select>
		</p>

		<p>	
			<label for="postcode">Postcode:</label>
			<input type="text" name="postcode" size="5" id="postcode"/>
		</p>
	</fieldset>

	<fieldset>
		<legend>Contact</legend>
		<p>
			<label for="phone">Phone number:</label>
			<input type="tel" id="phone" name="phone" size="10" placeholder="0168106100"/>
		</p>
	</fieldset>
	
<!--Data Transfer Within Page-->

	<fieldset>
		<legend>Services</legend>
		<p>
			<label>Enquiry on:</label>
			<input type="text" name="subject" id="subject" placeholder="Please enter your subject of enquiry."/>
		</p>
		<p>
			<select name="service" id="service" onchange="change()">
				<option value="none">---</option>
				<optgroup label="Production Services">
					<script>production_list()</script>
				</optgroup>
				<optgroup label="Publishing Services">
					<script>publishing_list()</script>
				</optgroup>
				<optgroup label="Marketing Services">
					<script>marketing_list()</script>
				</optgroup>
				<optgroup label="Promotion Services">
					<script>promotion_list()</script>
				</optgroup>
			</select>
		</p>
	</fieldset>

	<fieldset>
		<legend>Review</legend>		
		<p>
			Kindly rate the overall service (1 = Poor; 5 = Excellent)
			<input type="range" name="rate" min="1" max="5"/>
		</p>

		<p>
			Other comments:
			<textarea name="comments" rows="4" cols="40"></textarea>
		</p>
	</fieldset>
	
	<!-- Submit and reset buttons -->	
	<p class="buttons">		
		<input type="submit" value="Enquire"/>        
		<input type="reset" value="Reset"/>
	</p>
</form>

</article>
<footer>
	<?php include("footer.php"); ?>
</footer>
</body>
</html>