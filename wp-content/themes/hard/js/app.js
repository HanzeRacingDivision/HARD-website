jQuery(document).ready(function($){

    // $('.item').swipebox( {
	// 	useCSS : true, // false will force the use of jQuery for animations
	// 	useSVG : true, // false to force the use of png for buttons
	// 	initialIndexOnArray : 0, // which image index to init when a array is passed
	// 	hideCloseButtonOnMobile : false, // true will hide the close button on mobile devices
	// 	removeBarsOnMobile : true, // false will show top bar on mobile devices
	// 	hideBarsDelay : 3000, // delay before hiding bars on desktop
	// 	videoMaxWidth : 1140, // videos max width
	// 	beforeOpen: function() {}, // called before opening
	// 	afterOpen: null, // called after opening
	// 	afterClose: function() {}, // called after closing
	// 	loopAtEnd: false // true will return to the first image after the last image is reached
	// });

	// https://developers.google.com/sheets/api/guides/values

	$(window).scroll(function(){
		var scroll = $(window).scrollTop();

		$('body').toggleClass('scrolled', (scroll > 0));
	});

	if($('.sponsor-slider').length > 0) {
        $('.sponsor-slider').slick({
            infinite: true,
            speed: 300,
			slidesToShow: 5,
			draggable: true,
            // variableWidth: false,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 5000,
            // adaptiveHeight: true,
            // prevArrow: '<i aria-hidden="true" class="fas fa-chevron-left prev"></i>',
            // nextArrow: '<i aria-hidden="true" class="fas fa-chevron-right next"></i>',
        });
    }

});