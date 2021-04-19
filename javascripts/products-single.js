jQuery(document).ready(function($) {
	jQuery('.products-gallery__slider').slick({
		arrows: false,
	});

	jQuery('.products-gallery__arrow-prev').click(function(event) {
		jQuery('.products-gallery__slider').slick('prev');
		return false;
	});

	jQuery('.products-gallery__arrow-next').click(function(event) {
		jQuery('.products-gallery__slider').slick('next');
		return false;
	});
});