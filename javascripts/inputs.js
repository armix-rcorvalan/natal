jQuery(document).ready(function($) {

	jQuery('input[type="number"]').niceNumber();
	
	jQuery('.input-select').select2({
		minimumResultsForSearch: -1
	});

	jQuery('.input-range__input').jRange({
		from: 0,
		to: 100,
		step: 1,
		width: 180,
		showLabels: false,
		showScale: false,
	});

	jQuery('.accordion-checkbox__item--active .accordion-checkbox__content').show();

	jQuery('.accordion-checkbox__toggle').click(function(event) {

		if ( jQuery(this).parent('.accordion-checkbox__item').hasClass('accordion-checkbox__item--active') ) {
			jQuery(this).parent('.accordion-checkbox__item').removeClass('accordion-checkbox__item--active');	
			jQuery(this).siblings('.accordion-checkbox__content').slideUp();
		} else {
			jQuery(this).parent('.accordion-checkbox__item').addClass('accordion-checkbox__item--active');
			jQuery(this).siblings('.accordion-checkbox__content').slideDown();	
		}

		return false;
	});

});