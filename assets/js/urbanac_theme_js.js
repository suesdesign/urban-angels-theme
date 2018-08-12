(function($){ //create closure so we can safely use $ as alias for jQuery

	// Skip Link

	$(".tab_accessibility").focus(function(){
		$(this).addClass("tab_visible");
	});
		
})(jQuery);