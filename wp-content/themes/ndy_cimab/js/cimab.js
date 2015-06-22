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
});

$(window).load(function(){
	/*$('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails",
		start: function(slider){
			$('body').removeClass('loading');
		}
	});*/
	$('#carousel').flexslider({
		animation: "slide",
		controlNav: false,
		animationLoop: false,
		slideshow: false,
		itemMargin: 5,
		itemWidth: 480,
		asNavFor: "#slider",
	});

	$('#slider').flexslider({
		animation: "slide",
		controlNav: false,
		animationLoop: false,
		slideshow: true,
		sync: false,
		//manualControls: '#carousel'
		touch: true,
		slideshowSpeed: 3600,
		prevText: "",
		nextText: "",
	});
});