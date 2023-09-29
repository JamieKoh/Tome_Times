<!DOCTYPE html>
<html lang="en" class="service_pages">
<head>
	<link rel="stylesheet" type="text/css" href="styles/TT_styles.css"/>
	<meta name="keywords" content="authors, e-commerce, services"/>
	<meta name="description" content="This is a website that provides services for authors."/>
	<meta charset="UTF-8"/>
	<meta name="author" content="Jamie Jasmine Koh"/>
	<title>Tome Times production services page</title>
	<script src="scripts/script.js"></script>
</head>
<body>
<header class="container" id="production_top">
	<?php include("include/navbar.php"); ?>
</header>
<article>
	<div class="services">
		<img src="images/production.gif" alt="Production banner" class="banner"/>
		<h1>Production Services</h1>
		<div class="service_buttons">
			<a href="#editors">Editing</a>
			<a href="#beta-readers">Beta reading</a>
			<a href="#cover-artists">Cover designing</a>
			<a href="#narrators">Narrating</a>
		</div>
	</div>
	<div class="service_box_container">
	
		<!--Information on editors-->
		<div class="service_boxes_left" id="editors">
			<div class="service_images">
				<img src="images/editors.gif" alt="Editing illustration" title="Editing illustration"/>
			</div>
			<div class="service_texts">
				<h1>Editors</h1>
				<p>Behind every great book are great editors. Editors do various refining work. They check spellings, correct grammar, format your books to fit physical and e-book page sizes , and other editing the content of your books! Tome Times employs flexible editors so you can find someone perfectly suited to your needs. Rates begin at $2 per page. Click enquire to fill out the enquiry form so that we may contact you.</p>
				<a href="enquiry.php" class="right_service_buttons" onclick="storeitem('Editors')">Enquire</a>
			</div>
		</div>
		
		<!--Information on beta readers-->
		<div class="service_boxes_right" id="beta-readers">
			<div class="service_texts">
				<h1>Beta Readers</h1>
				<p>Beta readers are people who read and review drafts. Their feedback is crucial because it is a taste of what your readers will think of your book. They may point out plot holes and other issues with the content of the book. Some beta readers at Tome Time are willing to review your book without pay. Other beta readers' rates start from $0.25/page. Interested? Click enquire to fill out the enquiry form so that we may contact you.</p>
				<a href="enquiry.php" class="left_service_buttons" onclick="storeitem('Beta readers')">Enquire</a>
			</div>
			<div class="service_images">
				<img src="images/beta-readers.gif" alt="Beta reading illustration" title="Beta reading illustration"/>
			</div>
		</div>
		
		<!--Information on cover artists-->
		<div class="service_boxes_left" id="cover-artists">
			<div class="service_images">
				<img src="images/cover-artists.gif" alt="Cover artists illustration" title="Cover artists illustration"/>
			</div>
			<div class="service_texts">
				<h1>Cover Designers</h1>
				<p>Despite the common saying 'Don't judge a book by its cover', a good cover helps your book stand out amongst other books on a shelf in a store. Are you a great writer but lack designing skills? Don't worry, you can employ one of our cover designers to take care of it for you! They can design audiobook and e-book versions too. Prices start from $100. Click enquire to fill out the enquiry form so that we may contact you.</p>
				<a href="enquiry.php" class="right_service_buttons" onclick="storeitem('Cover designers')">Enquire</a>
			</div>
		</div>
		
		<!--Information on narrators-->
		<div class="service_boxes_right" id="narrators">
			<div class="service_texts">
				<h1>Narrators</h1>
				<p>Audiobooks are great for people who can't find time to sit down and read a book. People can listen to audiobooks while stuck in a traffic jam or simply to make a repetitive task more bearable. If you're interested in creating an audiobook but are inexperienced in the art of voiceovers? Then you'll need a narrator. Narrators record professional voiceovers in studios. Some narrators even offer to edit in sound effects which are great for action scenes. Prices start at $100/book. Click enquire to fill out the enquiry form so that we may contact you.</p>
				<a href="enquiry.php" class="left_service_buttons" onclick="storeitem('Narrators')">Enquire</a>
			</div>
			<div class="service_images">
				<img src="images/narrators.gif" alt="Narrating illustration" title="Narrating illustration"/>
			</div>
		</div>
	</div>
	
	<!--Back to top button-->
	<div class="to_top">
		<a href="#production_top">Back to top</a>
	</div>
	
</article>
<footer>
	<?php include("include/footer.php"); ?>
</footer>
</body>
</html>