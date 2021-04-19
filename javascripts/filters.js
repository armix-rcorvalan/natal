jQuery(document).ready(function($) {
	
	jQuery('.products__apply-filter').click(function(event) {
		jQuery('.products__sidebar').slideUp();
		return false;
	});

	jQuery('.button--filter').click(function(event) {
		jQuery('.products__sidebar').slideDown();
		return false;
	});

});