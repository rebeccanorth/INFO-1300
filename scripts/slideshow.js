//slideshow development inspired by lab09, slideshow.js from lab09-->
"use strict";
window.onload = function() {
	//array of images
	var images = ["bas.JPG", "circle.JPG", "dg.JPG", "emily.JPG","jw.JPG","kelsey.JPG","kkg.JPG", "love.JPG","love2.JPG","lovejimmy.JPG", ];
	//current image index
	var currentImage = 0;

	$("#left").click(function() {
		if (currentImage > 0) {
			currentImage -= 1;
			$("#current_img").attr("src","images/" + images[currentImage]);
			// move to previous image
		} else if (currentImage === 0) {
			currentImage = images.length - 1;
			$("#current_img").attr("src","images/" + images[currentImage]);
			//wrap around if last image
		}
	});

	$("#right").click(function() {
		if (currentImage < images.length - 1) {
			currentImage += 1;
			$("#current_img").attr("src","images/" + images[currentImage]);
			// move to next image
		} else if (currentImage === images.length - 1) {
			currentImage = 0;
			$("#current_img").attr("src","images/" + images[currentImage]);
			// wrap around if first image
		}
	});

};
