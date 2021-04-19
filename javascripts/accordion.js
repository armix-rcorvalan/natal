jQuery(document).ready(function($) {
	
	jQuery('.accordion__item--active .accordion__content').show();

	jQuery('.accordion__title').click(function(event) {

		if ( jQuery(this).parent('.accordion__item').hasClass('accordion__item--active') ) {
			jQuery(this).parent('.accordion__item').removeClass('accordion__item--active');	
			jQuery(this).siblings('.accordion__content').slideUp();
		} else {
			jQuery(this).parent('.accordion__item').addClass('accordion__item--active');
			jQuery(this).siblings('.accordion__content').slideDown();	
		}

		return false;
	});

});