jQuery(document).ready(function($){

	// https://developers.google.com/sheets/api/guides/values

	var menuOpen = false;

	$(window).scroll(function(){
		var scroll = $(window).scrollTop();

		// $('body').toggleClass('scrolled', (scroll > 0));
		$('#top-bar').toggleClass('scrolled', (scroll > 0));
	});


    $('#hamburger').click(function(e) {
		e.stopPropagation();
		menuOpen = !menuOpen;
        $('#main-nav').toggleClass('active', menuOpen);
		$('#top-bar').toggleClass('floating', menuOpen);
    });


	if($('.sponsor-slider').length > 0) {
        $('.sponsor-slider').slick({
            infinite: true,
            speed: 300,
			slidesToShow: 5,
			slidesToScroll: 1,
			draggable: true,
            variableWidth: true,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 2000,
            // adaptiveHeight: true,
            // prevArrow: '<i aria-hidden="true" class="fas fa-chevron-left prev"></i>',
			// nextArrow: '<i aria-hidden="true" class="fas fa-chevron-right next"></i>',
			responsive: [
				{
				  breakpoint: 1200,
				  settings: {
					slidesToShow: 4,
				  }
				},
				{
				  breakpoint: 900,
				  settings: {
					slidesToShow: 2,
				  }
				},
				{
				  breakpoint: 600,
				  settings: {
					slidesToShow: 2,
				  }
				},
			]
        });
    }

});