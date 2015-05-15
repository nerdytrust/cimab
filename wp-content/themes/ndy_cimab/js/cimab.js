$(function(){
	var toggles = $('.toggle a'),
	codes = $('.code');

	toggles.on("click", function(event){
		event.preventDefault();
		var $this = $(this);

		if (!$this.hasClass("active")) {
			toggles.removeClass("active");
			$this.addClass("active");
			codes.hide().filter(this.hash).show();
		}
	});
	toggles.first().click();

	$("#menu-m").click(function(){
		$(".nav").slideToggle("2000");
	});

	SyntaxHighlighter.all();
});

$(window).load(function(){
	$('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails",
		start: function(slider){
			$('body').removeClass('loading');
		}
	});
});