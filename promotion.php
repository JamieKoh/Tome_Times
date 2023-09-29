<!DOCTYPE html>
<html lang="en" class="service_pages">
<head>
	<link rel="stylesheet" type="text/css" href="styles/TT_styles.css"/>
	<meta name="keywords" content="authors, e-commerce, services"/>
	<meta name="description" content="This is a website that provides services for authors."/>
	<meta charset="UTF-8"/>
	<meta name="author" content="Jamie Jasmine Koh"/>
	<title>Tome Times promotion services page</title>
	<script src="scripts/script.js"></script>
</head>
<body>
<header class="container" id="promotion_top">
	<?php include("include/navbar.php"); ?>
</header>
<article>
	<div class="services">
		<img src="images/promotion.gif" alt="Promotion banner" class="banner"/>
		<h1>Promotion Services</h1>
		<div class="service_buttons">
			<a href="#magazine">Magazine ads</a>
			<a href="#book-fair">Book fairs</a>
			<a href="#social-media">Social media</a>
			<a href="#newspaper">Newspaper ads</a>
		</div>
	</div>
	<div class="service_box_container">
	
		<!--Information on magazine advertisements-->
		<div class="service_boxes_left" id="magazine">
			<div class="service_images">
				<img src="images/magazine.gif" alt="Magazine advertisment illustration" title="Magazine advertisment illustration"/>
			</div>
			<div class="service_texts">
				<h1>Magazine advertisements</h1>
				<p>Have you ever browsed through a themed magazine? Perhaps a fashion magazine at the barber's shop or a science magazine at a school fair? Well, we can place an ad of your book in a themed magazine as long as it is related! For example, if your book is a story in space, we can place an ad in next month's <a href="https://www.space.com/43203-all-about-space-free-issue.html">All About Space</a> magazine. Interested? Click enquire to fill out the enquiry form so that we may contact you.</p>
				<a href="enquiry.php" class="right_service_buttons" onclick="storeitem('Magazine advertisements')">Enquire</a>
			</div>
		</div>
		
		<!--Information on book fairs-->
		<div class="service_boxes_right" id="book-fair">
			<div class="service_texts">
				<h1>Book fair promotions</h1>
				<p>If you're looking to expand your market and promote your book, consider placing your book in the line-up for our book fairs! We often organize book fairs in various cities. We also frequently collaborate with <a href="https://bookfairs.scholastic.com/bookfairs/landing-page.html">Scholastic Book Fairs</a>. With us, your book could travel the world! Interested? Click enquire to fill out the enquiry form so that we may contact you.</p>
				<a href="enquiry.php" class="left_service_buttons" onclick="storeitem('Book fair promotions')">Enquire</a>
			</div>
			<div class="service_images">
				<img src="images/book-fair.gif" alt="Book fair illustration" title="Book fair illustration"/>
			</div>
		</div>
		
		<!--Information on social media shoutouts-->
		<div class="service_boxes_left" id="social-media">
			<div class="service_images">
				<img src="images/social-media.gif" alt="Social media shoutouts illustration" title="Online Social media shoutouts illustration"/>
			</div>
			<div class="service_texts">
				<h1>Social media shoutouts</h1>
				<p>Tome Times is active on various social media platforms such as <a href="https://www.instagram.com/tome_times/">Instagram</a>, <a href="https://twitter.com/TimesTome">Twitter</a>, and <a href="https://www.facebook.com/tome.times.1">Facebook</a>. To help spread the word about your book, we can help you promote your book via our social media platforms. Click enquire to fill out the enquiry form so that we may contact you.</p>
				<a href="enquiry.php" class="right_service_buttons" onclick="storeitem('Social media shoutouts')">Enquire</a>
			</div>
		</div>
		
		<!--Information on audiobook store-->
		<div class="service_boxes_right" id="newspaper">
			<div class="service_texts">
				<h1>Newspaper advertisements</h1>
				<p>Audiobooks are great for people who can't find time to sit down and read a book. People can listen to audiobooks while stuck in a traffic jam or simply to make a repetitive task more bearable. If you're interested in creating an audiobook but are inexperienced in the art of voiceovers? Then you'll need a narrator. Narrators record professional voiceovers in studios. Some narrators even offer to edit in sound effects which are great for action scenes. Prices start at $100/book. Click enquire to fill out the enquiry form so that we may contact you.</p>
				<a href="enquiry.php" class="left_service_buttons" onclick="storeitem('Newspaper advertisements')">Enquire</a>
			</div>
			<div class="service_images">
				<img src="images/newspaper.gif" alt="Newspaper advertisement illustration" title="Newspaper advertisement illustration"/>
			</div>
		</div>
	</div>
	
	<!--Back to top button-->
	<div class="to_top">
		<a href="#promotion_top">Back to top</a>
	</div>
	
</article>
<footer>
	<?php include("include/footer.php"); ?>
</footer>
</body>
</html>