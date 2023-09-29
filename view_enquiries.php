<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="styles/TT_styles.css"/>
	<meta name="keywords" content="authors, e-commerce, services"/>
	<meta name="description" content="This is a website that provides services for authors."/>
	<meta charset="UTF-8"/>
	<meta name="author" content="Jamie Jasmine Koh"/>
	<title>Tome Times view enquiries page</title>
</head>
<body>
<header class="container">
	<?php include("include/navbar.php"); ?>
</header>
<body id="view">


<?php
// set the servername,username and password
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Enquiry";

$user = $_POST['username'];
$pass = $_POST['password'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT username, password FROM UserDetails";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		if (($user == $row["username"]) && ($pass == $row["password"])) {
			
			$correct = true;
			
			echo "<h1>Welcome" . $row["username"] . "</h1>";
			
			$sql = "SELECT id, fname, lname, email, st_a, t_a, state, postcode, phone, subject, comments FROM EnquiryDetails";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
				// output data of each row
				echo "<h1>Table of Enquiry Details</h1>";
				echo "<table>";
				echo "<tr><th>Name</th><th>Email</th><th>Street Address</th><th>Town Address</th><th>State</th><th>Postcode</th><th>Phone Number</th><th>Subject</th><th>Comments</th></tr>";
				
				while($row = mysqli_fetch_assoc($result)) {
					echo "<tr><td>" . $row["fname"]. " " . $row["lname"]. "</td><td>" . $row["email"] . "</td>". "</td><td>" . $row["st_a"] . "</td>". "</td><td>" . $row["t_a"] . "</td><td>" . $row["state"] . "</td><td>" . $row["postcode"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["subject"] . "</td><td>" . $row["comments"] . "</td></tr>";
				}
				
				echo "</table>";
			} else {
				echo "0 results";
			}
		}
		else {
			$correct = false;
		}
	}
	
	if ($correct == false) {
		echo "<h1>Username or password is incorrect. Please try again.</h1>";
	}
}	

mysqli_close($conn);
?>
<footer>
	<?php include("include/footer.php"); ?>
</footer>


</body>
</html>