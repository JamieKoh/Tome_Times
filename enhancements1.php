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
	<h1>Enhancements 1</h1>
	
	
	<ol>
		<li class="enhancements" id="enhance1"><!-- Responsive Vertical Content Slider -->
			<h2>Responsive Vertical Content Slider</h2>
			<p>The responsive vertical content slider can be found throughout the <a href="index.php">home page</a>.</p>
			<p>Each slider contains a full screen image and some texts. The navigation bar and footer are fixed to the top and bottom of the screen respectively so that only the content of the slides are able to be manipulated. The slide is controlled by 3 horizontal buttons fixed just above the footer.</p>
			<p>The slider consists of 3 slides in total. Each slide is grouped into their own div. The 3 buttons above the footer are each linked to only one slide so that when they are clicked, the linked slide will be displayed. To prevent the slides to be scrollable, "overflow: hidden" is used. Thus, the only way to navigate between the 3 slides is to use the buttons.</p>
			<p>The texts on each slide are grouped into a sub-div so that the position of these texts can be changed easily using the rules of "position: relative"</p>
		</li>
	
		<li class="enhancements" id="enhance2"><!-- Rotating Icons-->
			<h2>Rotating Icons</h2>
			<p>The rotating icons are used in the navigation bars and footers of every webpage of the website, all of which are linked below:</p>
			<div id="enhance_links">
				<div>
					<a href="index.php">Home page</a>
					<a href="enhancements.php">Enhancements page</a>
					<a href="production.php">Production services page</a>
				</div>
				<div>
					<a href="publishing.php">Publishing sevices page</a>
					<a href="marketing.php">Marketing services page</a>
					<a href="promotion.php">Promotion services page</a>
				</div>
				<div>
					<a href="enquiry.php">Enquiry page</a>
					<a href="profile.php">Profile page</a>
					<a href="disclaimer.php">Disclaimer page</a>
				</div>
			</div>
			<p>The icons referred to are the social media icons in the footers and the website logo on the top left corner of the navigation bars. The icons were downloaded from <a href="https://icons8.com/">Icons8</a> and only the Instagram icon went through editing in Adobe Illustrator to make the white outline as thick as the other icons. The website logo was created from scratch in Adobe Illustrator.</p>
			<p>Hovering over the social media icons will cause the icons to rotate 360 degrees clockwise in 1 second while hovering over the website logo will cause the logo to rotate 260 degrees clockwise in 0.6 seconds.</p>
			<p>This was done by using the "transform: rotate" property, setting the rotation to 360 degrees on hover combined with setting the transition time of the elements to determine how long it takes for the rotation to complete.</p>
		</li>
		
		<li class="enhancements" id="enhance3"><!-- Automatic Text Slider -->
			<h2>Automatic Text Slider</h2>
			<p>The automatic text slider can be found on the second slide in the <a href="index.php">home page</a>.</p>
			<p>The sliding text is actually a string of four words arranged vertically one after the other. A small window large enough for only one word is set and the other three words that don't fit into the window are hidden.</p>
			<p>Then, an animation cycle is created using keyframes to increase and decrease the margin of the string of words at specific intervals. This way, when the margin increases or decreases, the whole string of words moves up or down the web page. So, the previously hidden word is pushed to the small window and is visible. When the margin is increased or decreased again, the next word will be pushed to take over the previous word at the window. This cycle is automatic and does not stop.</p>
		</li>
		
		<li class="enhancements" id="enhance4"><!-- Sliding Text -->
			<h2>Sliding Text</h2>
			<p>The sliding texts appear in the first slide of the <a href="index.php">home page</a>.</p>
			<p>Since the first slide is the first content a visitor would see in the home page, I used sliding text as an attention grabber.</p>
			<p>The sliding texts work similarly to the automatic text slider in the second slide. The difference is that the animation only takes place once before it stops instead of repeating itself in a never-ending loop.</p>
			<p>It works by setting the initial right margin of the text to a value that would push the text out of view to the left. Then the right margin slowly decreases, making room for the text to slide into view until the entirety of the message is settled nicely in the view screen where it is supposed to be.</p>
		</li>
	</ol>
</article>
<footer>
	<?php include("include/footer.php"); ?>
</footer>
</body>
</html>