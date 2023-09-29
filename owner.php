<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="styles/TT_styles.css"/>
	<meta name="keywords" content="authors, e-commerce, services"/>
	<meta name="description" content="This is a website that provides services for authors."/>
	<meta charset="UTF-8"/>
	<meta name="author" content="Jamie Jasmine Koh"/>
	<title>Tome Times owner log in page</title>
</head>
<body>
<header class="container">
	<?php include("include/navbar.php"); ?>
</header>
<body id="owner">
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "Enquiry";
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		
		if(!$conn) {
			die("Connection with database failed. Please try again due to an error: " . mysqli_connect_error());
		}
		
		$tablesql = "CREATE TABLE IF NOT EXISTS UserDetails (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		username VARCHAR(50) NOT NULL,
		password VARCHAR(50) NOT NULL,
		reg_date TIMESTAMP
		)";
		
		if(!mysqli_query($conn, $tablesql)) {
			echo "There was an error while creating the table of users: " . mysqli_error($conn);
		}
		
		$sql = "SELECT username, password FROM UserDetails";
		$result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result) == 0) {
			$sql = "INSERT INTO UserDetails (username, password)
				VALUES ('JamieKoh', '810')";
			if (!mysqli_query($conn, $sql)) {
				echo "Error creating owner. Please try again. " . $sql . "<br>" . mysqli_error($conn);
			}
		}
		mysqli_close($conn)
	?>
	
	<h1>Log In</h1>
	
	<div id="login">
		<form method="post" action="view_enquiries.php">
			<p>
				<label>Username:</labe>
				<input type="text" name="username"/>
			</p>
			<p>
				<label>Password: </labe>
				<input type="text" name="password"/>
			</p>
			<p>
				<input type="submit" value="Enter"/>
				<input type="reset" value="Reset"/>
			</p>
		</form>
	</div>
<footer>
	<?php include("include/footer.php"); ?>
</footer>
</body>
</html>