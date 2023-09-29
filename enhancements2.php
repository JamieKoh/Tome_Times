<!DOCTYPE html>
<html lang="en" class="enhancements_page">
<head>
	<link rel="stylesheet" type="text/css" href="styles/TT_styles.css"/>
	<meta name="keywords" content="authors, e-commerce, services"/>
	<meta name="description" content="This is a website that provides services for authors."/>
	<meta charset="UTF-8"/>
	<meta name="author" content="Jamie Jasmine Koh"/>
	<title>Tome Times enhancements 2 page</title>
</head>
<body>
<header class="container">
	<?php include("include/navbar.php"); ?>
</header>
<article>
	<h1>Enhancements 2</h1>
	
	<div class="enhancements"> 
		<h2>Responsive Content Slider</h2>
		<p>The responsive content slider can be found on the <a href="index.php">homepage</a>.</p>
		<p>It is enhanced from the previous slider by using javascript to add next and previous arrows while also changing the button navigation to be controlled by javascript codes instead of html codes. Since there are only three slides, each slide is assigned a number from one to 3. These numbers are manipulated using a counter in functions in javascript that are called when a navigation button is pressed.</p>
		<p>The counter automatically starts off at 1 since the first slide will be presented when the page is first loaded. Upon clicking the next button, the counter increases to 2 and the slide changes. If the user presses the next button after the counter has reached a value of 3, the counter is reset to a value of 1.</p>
		<p>Similarly, if the user clicks on the previous button, the value of the counter will be decremented by 1 unless the value is 1. In which case, the counter will be set to 3 so that when the user clicks on the previous button while on the first slide, the result is the 3rd slide will appear.</p>
		<p>As for the 3 buttons on the bottom of the slides, there is no incrementing or decrementing the value of the counter. Upon clicking a specific button, the counter is manually set to the number of the appropriate slide. This way, the codes are easy to read and simple to write since the number of slides being manipulated is small.</p>
	</div>
</article>
<footer>
	<?php include("include/footer.php"); ?>
</footer>
</body>
</html>