;(function($){
	$.fn.menu = function(){
		$(this).children("li")
			.mouseover(function(){
				$(this).addClass('hover');
			})
			.mouseout(function(){
				$(this).removeClass('hover');
			})
			.each(function(){
				var offsetWidth  = 0;
				$(this).children("ul").children("li")
					.each(function(){
						offsetWidth = (offsetWidth >= this.offsetWidth) ? offsetWidth :  this.offsetWidth;
						$(this).width(offsetWidth);
					});
				$(this).children("ul").width(offsetWidth);
			});
		return $(this).get(0);
	}
})(jQuery);
