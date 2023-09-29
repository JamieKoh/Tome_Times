/*Enhancement: Responsive Content Slider*/

var gCounter = 1

function next() {
	
	var counter = gCounter + 1;
	
	if(counter == 2) {
		var slide = document.getElementById('image2');
		slide.scrollIntoView();
	}
	gCounter = counter;
	if(counter == 3) {
		var slide = document.getElementById('image3');
		slide.scrollIntoView();
	}
	if(counter > 3) {
		var slide = document.getElementById('image1');
		slide.scrollIntoView();
		counter = 1;
	}
	gCounter = counter;
}

function prev() {
	var counter = gCounter - 1;
	
	if(counter < 1) {
		var slide = document.getElementById('image3');
		slide.scrollIntoView();
		counter = 3;
	}
	if(counter == 2) {
		var slide = document.getElementById('image2');
		slide.scrollIntoView();
	}
	if(counter == 1) {
		var slide = document.getElementById('image1');
		slide.scrollIntoView();
	}
	gCounter = counter;
}

function dots1() {
	var slide = document.getElementById('image1');
	slide.scrollIntoView();
	gCounter = 1;
}

function dots2() {
	var slide = document.getElementById('image2');
	slide.scrollIntoView();
	gCounter = 2;
}

function dots3() {
	var slide = document.getElementById('image3');
	slide.scrollIntoView();
	gCounter = 3;
}

