<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="styles/TT_styles.css"/>
	<meta name="keywords" content="authors, e-commerce, services"/>
	<meta name="description" content="This is a website that provides services for authors."/>
	<meta charset="UTF-8"/>
	<meta name="author" content="Jamie Jasmine Koh"/>
	<title>Tome Times homepage</title>
	<script src="scripts/enhancements.js"></script>
</head>
<body>
<header class="container" id="index_header">
	<?php include("include/navbar.php"); ?>
</header>
<article id="slides">
	<div class="slides_image" id="image1">
		<img src="images/welcome.gif" alt="welcome slide"/>
		<div class="txt" id="card1">
			<h1>Welcome to Tome Times</h1>
			
			<p>Want to write a book? You've come to the right place! We have so many crucial services to offer you.</p>
			
			<p><a href="#image2">Learn More</a></p>
		</div>
	</div>
	<div class="slides_image" id="image2">
		<img src="images/service.gif" alt="service display slide"/>
		<div class="txt" id="card2">
			<h1>Tome Times provides services in 4 main processes.</h1>
			<div id="services">
				<p id="start">Production</p>
				<p>Publishing</p>
				<p>Marketing</p>
				<p>Promotion</p>
			</div>
		</div>
	</div>
	<div class="slides_image" id="image3">
		<img src="images/map.gif" alt="to enquiry slide"/>
		<div class="txt" id="card3">
			<h1>Interested in a service?</h1>
			<p> Head over to the enquiry page and sign up for more information on a specific service!</p>
		</div>
	</div>
	
	<div class="arrows">
		<a id="prev" onclick="prev()">&#10094;</a>
		<a id="next" onclick="next()">&#10095;</a>
	</div>
	
	<div class="dotsbox">
		<span class="dots" onclick="dots1()"></span>
		<span class="dots" onclick="dots2()"></span>
		<span class="dots" onclick="dots3()"></span>
	</div>
</article>

<footer id="main_page_footer">
	<?php include("include/footer.php"); ?>
</footer>
</body>
</html>