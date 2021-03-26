jQuery(document).ready(function($) {

	jQuery('.menu-icon').click(function(event) {
		if ( jQuery('.header__menu-mobile').hasClass('header__menu-mobile--active') ) {
			jQuery('.header__menu-mobile').removeClass('header__menu-mobile--active');
		} else {
			jQuery('.header__menu-mobile').addClass('header__menu-mobile--active');
		}
		return false;
	});

	jQuery('.categories-icon').click(function(event) {
		if ( jQuery('.header-bottom__menu-categories').is(':visible') ) {
			jQuery('.header-bottom__menu-categories').slideUp(150);
		} else {
			jQuery('.header-bottom__menu-categories').slideDown(150);
		}
		return false;
	});


});