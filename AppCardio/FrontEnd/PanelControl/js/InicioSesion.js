var UsuarioActual = jQuery.parseJSON(sessionStorage.getItem('user'));

// $('#id_user').val(UsuarioActual);
//console.log(configuracionGlobal.api_url + "/Usuarios/Loguear"+configuracionGlobal.apikey);

$('#IniciarSesion').click(function(event) {

	event.preventDefault();
	alerta = '';
	data = {
		username : $('#usuario').val(),
		clave : $('#pass').val()
	};

    alert(data);
	$.post('http://localhost/AppCardio/ApiREST/Usuarios/Logear',
		{datos: data}, 
		function(res){
			if(res.Estado == 1){
				alerta = '<div class="alert alert-success alert-dismissible" role="alert">';
				alerta += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
				alerta += res.Mesaje+'</div>';
				sessionStorage.setItem('user',JSON.stringify(res.Usuario));
				Recargar("http://localhost/AppCardio/FrontEnd/PanelControl/");
			}else{
				alerta = '<div class="alert alert-danger alert-dismissible" role="alert">';
				alerta += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
				alerta += res.Mesaje+'</div>';
			}
			$('#alertas').html('');
			$('#alertas').append(alerta);
		}
	);
});

$('#CrearNuevoUser').click(function(event) {
    event.preventDefault();
	if(!($('#user').val() == '' || $('#passs').val() == '' )){
		alerta = '';
		datos = {
			username : $('#user').val(),
			clave : $('#passs').val(),
			estado : $('#estado').val(),
			rol : $('#rol').val()
		}
		$.post('http://localhost/AppCardio/ApiREST/Usuarios/Registrar', 
			{datos: datos}, 
			function(data) {
				if(data.estado == 1){
					alerta = '<div class="alert alert-success alert-dismissible" role="alert">';
					alerta += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
					alerta += data.Mensaje+'</div>';
				}else{
					alerta = '<div class="alert alert-danger alert-dismissible" role="alert">';
					alerta += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
					alerta += data.Mensaje+'</div>';
				}

				$('#alertass').html(alerta);
			}
		);
		return false;
	}
});