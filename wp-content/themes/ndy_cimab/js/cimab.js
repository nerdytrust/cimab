$(function(){
	var opts = {
		lines: 13,
		length: 25,
		width: 10,
		radius: 35,
		scale: 1,
		corners: 1,
		rotate: 0,
		direction: 1,
		color: '#ffffff',
		speed: 1.4,
		trail: 100,
		shadow: false,
		hwaccel: false,
		className: 'spinner',
		zIndex: 2e9,
		top: '50%',
		left: '50%'
	};
	var target = document.getElementById('foo');

	$('#form_newsletter_suscribe').submit(function(){
		var spinner = new Spinner(opts).spin(target);
		$(this).ajaxSubmit({
			beforeSubmit: function(){
				$('#foo').css('display','block');
			},
			success: function(data){
				if ( data.success != true){
					$('#messages').html( data.errors );
					$('#messages').hide().slideDown("slow");
					$("#messages").delay(3500).slideUp(800, function(){
					$("#messages").html("");
						spinner.stop();
						$('#foo').css('display','none');
					});
				}else{
					$('#messages').css('background-color','#48bf06');
					$('#messages').html( data.messages );
					$('#messages').hide().slideDown("slow");
					$("#messages").delay(4500).slideUp(800, function(){
						$("#messages").html("");
						spinner.stop();
						$('#foo').css('display','none');
						$('#form_newsletter_suscribe')[0].reset();
					});
				}
			},
			error: function(data){
				$('#messages').html(data.errors);
				$('#messages').hide().slideDown("slow");
				$("#messages").delay(3500).slideUp(800, function(){
				$("#messages").html("");
					spinner.stop();
					$('#foo').css('display','none');
				});
			}
		});
		return false;
	});

	$('#form_nueva_platica').submit(function(){
		var spinner = new Spinner(opts).spin(target);
		$(this).ajaxSubmit({
			beforeSubmit: function(){
				$('#foo').css('display','block');
			},
			success: function(data){
				if ( data.success != true){
					$('#messages').html( data.errors );
					$('#messages').hide().slideDown("slow");
					$("#messages").delay(3500).slideUp(800, function(){
					$("#messages").html("");
						spinner.stop();
						$('#foo').css('display','none');
					});
				}else{
					$('#messages').css('background-color','#48bf06');
					$('#messages').html( data.messages );
					$('#messages').hide().slideDown("slow");
					$("#messages").delay(4500).slideUp(800, function(){
						$("#messages").html("");
						spinner.stop();
						$('#foo').css('display','none');
						$('#form_nueva_platica')[0].reset();
					});
				}
			},
			error: function(data){
				$('#messages').html(data.errors);
				$('#messages').hide().slideDown("slow");
				$("#messages").delay(3500).slideUp(800, function(){
				$("#messages").html("");
					spinner.stop();
					$('#foo').css('display','none');
				});
			}
		});
		return false;
	});

	$('#form_nuevo_voluntario').submit(function(){
		var spinner = new Spinner(opts).spin(target);
		$(this).ajaxSubmit({
			beforeSubmit: function(){
				$('#foo').css('display','block');
			},
			success: function(data){
				if ( data.success != true){
					$('#messages').html( data.errors );
					$('#messages').hide().slideDown("slow");
					$("#messages").delay(3500).slideUp(800, function(){
					$("#messages").html("");
						spinner.stop();
						$('#foo').css('display','none');
					});
				}else{
					$('#messages').css('background-color','#48bf06');
					$('#messages').html( data.messages );
					$('#messages').hide().slideDown("slow");
					$("#messages").delay(4500).slideUp(800, function(){
						$("#messages").html("");
						spinner.stop();
						$('#foo').css('display','none');
						$('#form_nuevo_voluntario')[0].reset();
					});
				}
			},
			error: function(data){
				$('#messages').html(data.errors);
				$('#messages').hide().slideDown("slow");
				$("#messages").delay(3500).slideUp(800, function(){
				$("#messages").html("");
					spinner.stop();
					$('#foo').css('display','none');
				});
			}
		});
		return false;
	});

	$('#form_nuevo_contacto').submit(function(){
		var spinner = new Spinner(opts).spin(target);
		$(this).ajaxSubmit({
			beforeSubmit: function(){
				$('#foo').css('display','block');
			},
			success: function(data){
				if ( data.success != true){
					$('#messages').html( data.errors );
					$('#messages').hide().slideDown("slow");
					$("#messages").delay(3500).slideUp(800, function(){
					$("#messages").html("");
						spinner.stop();
						$('#foo').css('display','none');
					});
				}else{
					$('#messages').css('background-color','#48bf06');
					$('#messages').html( data.messages );
					$('#messages').hide().slideDown("slow");
					$("#messages").delay(4500).slideUp(800, function(){
						$("#messages").html("");
						spinner.stop();
						$('#foo').css('display','none');
						$('#form_nuevo_contacto')[0].reset();
					});
				}
			},
			error: function(data){
				$('#messages').html(data.errors);
				$('#messages').hide().slideDown("slow");
				$("#messages").delay(3500).slideUp(800, function(){
				$("#messages").html("");
					spinner.stop();
					$('#foo').css('display','none');
				});
			}
		});
		return false;
	});

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

	$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
	    event.preventDefault();
	    $(this).ekkoLightbox();
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