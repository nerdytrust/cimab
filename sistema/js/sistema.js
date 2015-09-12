/**
 * @author Eric Bravo <http://twitter.com/@gmaniako>
 */

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

	$('.form-horizontal').submit(function(){
		var spinner = new Spinner(opts).spin(target);
		$(this).ajaxSubmit({
			beforeSubmit: function(){
				$('#foo').css('display','block');
			},
			success: function(data){
				if ( data.success != true ){
					$('#messages').html( data.errors );
					$('#messages').hide().slideDown('slow');
					$('#messages').delay(3000).slideUp(800, function(){
					$('#messages').html('');
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
					 
					spinner.stop();
					$('#foo').css('display','none');*/
					window.location.href = data.redirect;
				}
			},
			error: function(data){
				$('#messages').html(data.errors);
				$('#messages').hide().slideDown('slow');
				$('#messages').delay(3000).slideUp(800, function(){
				$('#messages').html('');
					spinner.stop();
					$('#foo').css('display','none');
				});
			}
		});
		return false;
	});

	$('#federal_entity').change(function(){
		var idFederalEntity = $(this).val();
		var optionMun = '<option>Cargando municipios ...</option>';
		$('#town').html(optionMun);
		$.getJSON( base_url+'pacientes/town/'+idFederalEntity, function( data ) {
			optionMun = '';
			$.each(data, function( index, municipio ) {
  				optionMun += '<option value="'+municipio.id+'">'+municipio.nombre+'</option>';
			});
			$('#town').html(optionMun);
		});
	});

	$('.datepicker').datepicker({
   		format: 'dd/mm/yyyy'
   	}).on('changeDate', function (ev) {
    	$(this).datepicker('hide');
	});

   	 page = 1;

   	$('#list_patients_apoyo').DataTable( {
        "processing": true,
        "serverSide": true,
        /*"scrollY": 450,*/
        "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.9/i18n/Spanish.json"
           },
        "ajax": {
            "url": "list_ajax",
            "data": function ( d ) {
                d.page = page;
            }
        }
    } );

	var list_patients = $('#list_patients').DataTable( {
        "processing": true,
        "serverSide": true,
        /*"scrollY": 450,*/
        "columnDefs": [ {
            "targets": -1,
            "data": null,
            "defaultContent": '<button class="btn btn-purple btn-flat text-center">Editar paciente</button>'
        } ],
        "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.9/i18n/Spanish.json"
           },
        "ajax": {
            "url": "list_ajax",
            "data": function ( d ) {
                d.page = page;
            }
        }
    } );

    $('#list_patients tbody').on( 'click', 'button', function () {
        var data = list_patients.row( $(this).parents('tr') ).data();
        window.location.href = base_url+"pacientes/index/"+data[0];
    } );

});

function setPage(nPage,PrevNext){
	pageActual = $( "body" ).find( "a.current" ).attr( "data-dt-idx" );
	//console.log($( "table" ).find( "a.current" ).attr( "data-dt-idx" ));
	if(PrevNext == 'previous')
		page = pageActual-1;
	else if(PrevNext == 'next')
		page = pageActual+1;
	else
		page = nPage;
}