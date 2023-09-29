<!DOCTYPE html>
<html lang="en" class="service_pages">
<head>
	<link rel="stylesheet" type="text/css" href="styles/TT_styles.css"/>
	<meta name="keywords" content="authors, e-commerce, services"/>
	<meta name="description" content="This is a website that provides services for authors."/>
	<meta charset="UTF-8"/>
	<meta name="author" content="Jamie Jasmine Koh"/>
	<title>Tome Times publishing services page</title>
	<script src="scripts/script.js"></script>
</head>
<body>
<header class="container" id="publishing_top">
	<?php include("include/navbar.php"); ?>
</header>
<article>
	<div class="services">
		<img src="images/publishing.gif" alt="Publishing banner" class="banner"/>
		<h1>Publishing Services</h1>
		<div class="service_buttons">
			<a href="#hardcover">Hardcover</a>
			<a href="#paperback">Paperback</a>
			<a href="#e-book">E-book</a>
			<a href="#audiobook">Audiobook</a>
		</div>
	</div>
	<div class="service_box_container">
	
		<!--Information on hardcover publishing-->
		<div class="service_boxes_left" id="hardcover">
			<div class="service_images">
				<img src="images/hardcover.gif" alt="Hardcover publishing illustration" title="Hardcover publishing illustration"/>
			</div>
			<div class="service_texts">
				<h1>Hardcover Publishing</h1>
				<p>Publish a hardcover book with Tome Times. Hardcover books are books are bound with rigid, secure covers. They have flexible, sewn spines which allow them to lie flat on their backs when opened. You'll earn a royalty of 10% of the selling price on the first 5000 copies sold; 12.5% for the next 5000 copies; and 15% for all further copies! Interested? Click enquire to fill out the enquiry form so that we may contact you.</p>
				<a href="enquiry.php" class="right_service_buttons" onclick="storeitem('Hardcover publishing')">Enquire</a>
			</div>
		</div>
		
		<!--Information on paperback publishing-->
		<div class="service_boxes_right" id="paperback">
			<div class="service_texts">
				<h1>Paperback Publishing</h1>
				<p>Paperback books are printed books like hardcovers but instead of being bound with rigid covers, they are bound with a softer material such as thick paper or paperboard. These books are held together by glue instead of sewing. They are lighter and more flexibe than hardcover books. Publishing in paperback will allow you to earn 8% in royalties of the retail price for the first 150000 copies sold. The royalties then increase to 10% for all copies sold thereafter. Click enquire to fill out the enquiry form so that we may contact you.</p>
				<a href="enquiry.php" class="left_service_buttons" onclick="storeitem('Paperback publishing')">Enquire</a>
			</div>
			<div class="service_images">
				<img src="images/paperback.gif" alt="Paperback publishing illustration" title="Paperback publishing illustration"/>
			</div>
		</div>
		
		<!--Information on e-book publishing-->
		<div class="service_boxes_left" id="e-book">
			<div class="service_images">
				<img src="images/ebook.gif" alt="E-book publishing illustration" title="E-book publishing illustration"/>
			</div>
			<div class="service_texts">
				<h1>E-book Publishing</h1>
				<p>Electronic books or e-books are softcopy versions of your completed book. Customers purchase and read these books digitally. E-books are a convenient option because they take up less space, are easier to carry around, and are more accessible than traditional printed books. With e-books, we as publishers omit the cost of printing, binding, and shipping etc. So, you'll earn a higher royalty rate of 25% for all book copies sold! Click enquire to fill out the enquiry form so that we may contact you.</p>
				<a href="enquiry.php" class="right_service_buttons" onclick="storeitem('E-book publishing')">Enquire</a>
			</div>
		</div>
		
		<!--Information on narrators-->
		<div class="service_boxes_right" id="audiobook">
			<div class="service_texts">
				<h1>Audiobook Publishing</h1>
				<p>Audiobooks have been rising in sales and popularity. They are sold on various platforms such as Audible and Listen up. Publishing an audiobook at Tome Times will earn you a royalty of 40% for every copy of your audiobook sold. Interested? Click enquire to fill out the enquiry form so that we may contact you.</p>
				<a href="enquiry.php" class="left_service_buttons" onclick="storeitem('Audiobook publishing')">Enquire</a>
			</div>
			<div class="service_images">
				<img src="images/audiobook.gif" alt="Audiobook publishing illustration" title="Audiobook publishing illustration"/>
			</div>
		</div>
	</div>
	
	<!--Back to top button-->
	<div class="to_top">
		<a href="#publishing_top">Back to top</a>
	</div>
	
</article>
<footer>
	<?php include("include/footer.php"); ?>
</footer>
</body>
</html>