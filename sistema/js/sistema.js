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

	$('#form_login').submit(function(){
		var spinner = new Spinner(opts).spin(target);
		$(this).ajaxSubmit({
			beforeSubmit: function(){
				$('#foo').css('display','block');
			},
			success: function(data){
				if ( data.success != true ){
					$('#messages').html( data.errors );
					$('#messages').hide().slideDown("slow");
					$("#messages").delay(3500).slideUp(800, function(){
					$("#messages").html("");
						spinner.stop();
						$('#foo').css('display','none');
					});
				} else {
					/*
					$('#messages').css('background-color','#48bf06');
					$('#messages').html( data.messages );
					$('#messages').hide().slideDown("slow");
					$("#messages").delay(4500).slideUp(800, function(){
						$("#messages").html("");
						spinner.stop();
						$('#foo').css('display','none');
						$('#form_nueva_platica')[0].reset();
					});
					 */
					spinner.stop();
					$('#foo').css('display','none');
					window.location.href = data.redirect;
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
});