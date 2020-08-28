(function ($, root, undefined) {
	$(function () {
		'use strict';
        // DOM ready, take it away
        $(".dropdown .button").click(function (e){
            var dropdown = $(this).parents('.dropdown');
            dropdown.toggleClass('is-active');
            e.stopPropagation();
        });
        $("#dropdown-menu").click(function(e){
            e.stopPropagation();
        });
        
        $(document).click(function(){
            //var dropdown = $(this).parents('.dropdown');
            //dropdown.removeClass('is-active');
            $(".dropdown").removeClass('is-active');
        });
	});
})(jQuery, this);