<!DOCTYPE html>
<html lang="en" class="service_pages">
<head>
	<link rel="stylesheet" type="text/css" href="styles/TT_styles.css"/>
	<meta name="keywords" content="authors, e-commerce, services"/>
	<meta name="description" content="This is a website that provides services for authors."/>
	<meta charset="UTF-8"/>
	<meta name="author" content="Jamie Jasmine Koh"/>
	<title>Tome Times marketing services page</title>
	<script src="scripts/script.js"></script>
</head>
<body>
<header class="container" id="marketing_top">
	<?php include("include/navbar.php"); ?>
</header>
<article>
	<div class="services">
		<img src="images/marketing.gif" alt="Marketing banner" class="banner"/>
		<h1>Marketing Services</h1>
		<div class="service_buttons">
			<a href="#bookstores">Bookstores</a>
			<a href="#libraries">Libraries</a>
			<a href="#online-bookstores">Online bookstores</a>
			<a href="#audiobook-stores">Audiobook stores</a>
		</div>
	</div>
	<div class="service_box_container">
	
		<!--Information on bookstores-->
		<div class="service_boxes_left" id="bookstores">
			<div class="service_images">
				<img src="images/bookstore.gif" alt="Bookstores illustration" title="Bookstores illustration"/>
			</div>
			<div class="service_texts">
				<h1>Distribution to bookstores</h1>
				<p>So, you want to start selling your books. We've got good news! We have many connections and can sell your books at bookstores all over the world. We distribute books to <a href="https://www.popular.com.my/">Popular</a> stores in Southeast Asia, <a href="https://www.barnesandnoble.com/">Barnes and Noble</a> in America and many more. Not to mention our own Tome Times bookstores which mostly feature books that we helped produce. Click enquire to fill out the enquiry form so that we may contact you.</p>
				<a href="enquiry.php" class="right_service_buttons" onclick="storeitem('Distribution to bookstore')">Enquire</a>
			</div>
		</div>
		
		<!--Information on libraries-->
		<div class="service_boxes_right" id="libraries">
			<div class="service_texts">
				<h1>Distribution to libraries</h1>
				<p>Tome Times distributes books to public and school libraries across the world. We are currently in the process of establishing a public library. We plan to showcase exclusively books that were published by Tome Times during the grand opening of our library. So keep an eye out for a special chance to have your book as one of the limited works on our shelves! Click enquire to fill out the enquiry form so that we may contact you.</p>
				<a href="enquiry.php" class="left_service_buttons" onclick="storeitem('Distribution to libraries')">Enquire</a>
			</div>
			<div class="service_images">
				<img src="images/library.gif" alt="Library illustration" title="Library illustration"/>
			</div>
		</div>
		
		<!--Information on online bookstore-->
		<div class="service_boxes_left" id="online-bookstores">
			<div class="service_images">
				<img src="images/online-store.gif" alt="Online bookstore illustration" title="Online bookstore illustration"/>
			</div>
			<div class="service_texts">
				<h1>Distribution to online bookstores</h1>
				<p>If you, like many people today are interested in online shopping or e-commerce, why not branch out and try selling your book online? Besides Our very own Tome Times online bookstore, we can distribute your book to all kinds of online stores such as <a href="https://www.amazon.com/">Amazon</a> and <a href="https://www.barnesandnoble.com/">Barnes and Noble</a>. Interested? Click enquire to fill out the enquiry form so that we may contact you.</p>
				<a href="enquiry.php" class="right_service_buttons" onclick="storeitem('Distribution to online bookstores')">Enquire</a>
			</div>
		</div>
		
		<!--Information on audiobook store-->
		<div class="service_boxes_right" id="audiobook-stores">
			<div class="service_texts">
				<h1>Distribution to audiobook stores</h1>
				<p>We are connected to online stores that sell audiobooks such as <a href="https://www.audible.com/">Audible</a>. They would make great platforms to sell your audiobooks. You can also sell your books at the Tome Times audiobook store. Alternatively, we can distribute your audiobooks to stores that sell your audiobooks in cd format like <a href="https://www.waterstones.com/books/search/format/4/sort/bestselling/">Waterstones</a>. Click enquire to fill out the enquiry form so that we may contact you.</p>
				<a href="enquiry.php" class="left_service_buttons" onclick="storeitem('Distribution to audiobook stores')">Enquire</a>
			</div>
			<div class="service_images">
				<img src="images/audiobook-store.gif" alt="Audiobook store illustration" title="Audiobook store illustration"/>
			</div>
		</div>
	</div>
	
	<!--Back to top button-->
	<div class="to_top">
		<a href="#marketing_top">Back to top</a>
	</div>
	
</article>
<footer>
	<?php include("include/footer.php"); ?>
</footer>
</body>
</html>