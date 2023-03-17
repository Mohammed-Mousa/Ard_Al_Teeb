$(document).ready(function () {



	$(window).on("scroll load", function () {
		if ($(window).scrollTop() > 0) {
			$("#nav").addClass("background-black");
		} else {
			$("#nav").removeClass("background-black");
		}
	})




	$('.owl-carousel').owlCarousel({
		items: 1,
		rtl: true,
		autoplay: true,
		autoplayTimeout: 113500,
		autoplayHoverPause: true,
		nav: false,
		dots: true,
		loop: true,
		margin: 0,
	});


	var year = new Date().getFullYear();
	$("#year").text(year);


	$("#cover").fadeOut();
	$("#body").css("opacity", "1")

}); //End ready() ==> End Code JQuery