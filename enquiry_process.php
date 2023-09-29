<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="styles/TT_styles.css"/>
	<meta name="keywords" content="authors, e-commerce, services"/>
	<meta name="description" content="This is a website that provides services for authors."/>
	<meta charset="UTF-8"/>
	<meta name="author" content="Jamie Jasmine Koh"/>
	<title>Tome Times enquiry process page</title>
</head>
<body>
<header class="container">
	<?php include("include/navbar.php"); ?>
</header>
<body id="process">
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
			
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "Enquiry";
			
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}

			$sql = "INSERT INTO EnquiryDetails (fname, lname, email, st_a, t_a, state, postcode, phone, subject, comments)
			VALUES ('$fname', '$lname', '$email', '$st_a', '$t_a', '$state', '$postcode', '$phone', '$subject', '$comments')";


			if (mysqli_query($conn, $sql)) {
				echo "<h1>Thank you for collaborating with Tome Times! We've recieved your enquiry and will contact you soon.</h1>";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

			mysqli_close($conn);
		}
		else{
			echo "<h1>Something went wrong. Please fill in the enquiry form again. Apologies for the inconvenience.</h1>";
		}
	?>
<article>
	<table>
		<tr id="table_title">
			<th colspan="2">
				Enquiry Details:
			</th>
		</tr>
		
		<tr>
			<th>
				First name
			</th>
			<td>
				<?php echo $fname; ?>
			</td>
		</tr>
		
		<tr>
			<th>
				Last name
			</th>
			<td>
				<?php echo $lname; ?>
			</td>
		</tr>
		
		<tr>
			<th>
				Email
			</th>
			<td>
				<?php echo $email; ?>
			</td>
		</tr>
		
		<tr>
			<th>
				Street Address
			</th>
			<td>
				<?php echo $st_a; ?>
			</td>
		</tr>
		
		<tr>
			<th>
				Town Address
			</th>
			<td>
				<?php echo $t_a; ?>
			</td>
		</tr>
		
		<tr>
			<th>
				State
			</th>
			<td>
				<?php echo $state; ?>
			</td>
		</tr>
		
		<tr>
			<th>
				Postcode
			</th>
			<td>
				<?php echo $postcode; ?>
			</td>
		</tr>
		
		<tr>
			<th>
				Phone number
			</th>
			<td>
				<?php echo $phone; ?>
			</td>
		</tr>
		
		<tr>
			<th>
				Subject
			</th>
			<td>
				<?php echo $subject; ?>
			</td>
		</tr>
		
		<tr>
			<th>
				Comments
			</th>
			<td>
				<?php echo $comments; ?>
			</td>
		</tr>
	</table>
</article>
<footer>
	<?php include("include/footer.php"); ?>
</footer>
</body>
</html>