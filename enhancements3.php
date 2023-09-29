<!DOCTYPE html>
<html lang="en" class="enhancements_page">
<head>
	<link rel="stylesheet" type="text/css" href="styles/TT_styles.css"/>
	<meta name="keywords" content="authors, e-commerce, services"/>
	<meta name="description" content="This is a website that provides services for authors."/>
	<meta charset="UTF-8"/>
	<meta name="author" content="Jamie Jasmine Koh"/>
	<title>Tome Times enhancements 1 page</title>
</head>
<body>
<header class="container">
	<?php include("include/navbar.php"); ?>
</header>
<article>
	<h1>Enhancements 3</h1>
	
	<ol>
		<li class="enhancements"><!-- Responsive Vertical Content Slider -->
			<h2>Confirm Page</h2>
			<p>After the enquiry form is filled, instead of immediately inserting the data into the table inside the Enquiry database, this page acts as a final confirmation before the user's inputs are stored.</p>
			<p>This is useful because without the confirm page, the user would fill in the enquiry form, and upon submitting, they will be taken to the processing page that immediately stores the data and displays a table showing the data that was just stored. At this point if the user realises that they have misspelled something or made an error anywhere else, there is nothing they can do but go back and refill the form and resubmit. This will cause the table to store both the form details which had an error, and the correct form details. Later, should the owner of the website need to view the table of recorded enquiry details, it will be harder to read and take up more space due to the stored redundant details </p>
			<p>With the confirm page, the web page displays the inputted values based on the enquiry form to the user one more time to confirm with the user before processing and inserting the data into the table.</p>
		</li>
	
		<li class="enhancements"><!-- Rotating Icons-->
			<h2>User Login Page</h2>
			<p>The user login page acts as a safeguard that ensures that the user has authorization to view the table of enquiry details. This is done by setting up a <a href="owner.php">login page</a>. This page works similar to the enquiry form page wherein it creates a "User Details" table containing a username and a password if such a table does not already exists. On screen, the user is required to enter their username and password.</p>
			<p>Upon submission, the user will be redirected to a <a href="view_enquiries.php">"view enquiries"</a> page. This page will perform a checking process by comparing the inputted username and password to the username and password in the "User Details" table. Only if both entries match, shall the "view enquiry" page display the table of enquiry details recorded upon confirmation of the enquiry form.</p>
		</li>
	</ol>
</article>
<footer>
	<?php include("include/footer.php"); ?>
</footer>
</body>
</html>