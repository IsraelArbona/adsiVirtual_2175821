var ControlUsers = false;
var ControlBarrios = false;
var ControlCiudades = false;
var ControlMedicamentos = false;
var ControlPacientes = false;
var ControlCum_Programas = false;
var ControlHipertension_Arterial = false;
var ControlHipercolesterolemia = false;
var ControlDeabetes = false;



var UsuarioActual = jQuery.parseJSON(sessionStorage.getItem('user'));

$('#l_usu').val(UsuarioActual[0].Usuario);


$('#ControlPanelUser').click(function(event) {
	if(!ControlUsers){
		$('#n_img').addClass('hidden');
		listarUsers();
		ControlUsers = true;
	}else{
		ControlUsers = false;
	}
});

$('#ControlPanelBarrio').click(function(event) {
	if(!ControlBarrios){
		listarBarrios();
		ControlBarrios = true;
	}else{
		ControlBarrios = false;
	}
});

$('#ControlPanelCiudad').click(function(event) {
	if(!ControlCiudades){
		listarCiudad();
		ControlCiudades = true;
	}else{
		ControlCiudades = false;
	}
});

$('#ControlPanelMedicamento').click(function(event) {
	if(!ControlMedicamentos){
		listarMedicamento();
		ControlMedicamentos = true;
	}else{
		ControlMedicamentos = false;
	}
});

$('#ControlPanelPaciente').click(function(event) {
	if(!ControlPacientes){
		listarPaciente();
		ControlPacientes = true;
	}else{
		ControlPacientes = false;
	}
});

$('#ControlPanelCum_Programa').click(function(event) {
	if(!ControlCum_Programas){
		listarCum_Programa();
		ControlCum_Programas = true;
	}else{
		ControlCum_Programas = false;
	}
});

$('#ControlPanelHipertension_Arterial').click(function(event) {
	if(!ControlHipertension_Arterial){
		listarHipertension_Arterial();
		ControlHipertension_Arterial = true;
	}else{
		ControlHipertension_Arterial = false;
	}
});

$('#ControlPanelHipercolesterolemia').click(function(event) {
	if(!ControlHipercolesterolemia){
		listarHipercolesterolemia();
		ControlHipercolesterolemia = true;
	}else{
		ControlHipercolesterolemia = false;
	}
});

$('#ControlPanelDeabetes').click(function(event) {
	if(!ControlDeabetes){
		listarDeabetes();
		ControlDeabetes = true;
	}else{
		ControlDeabetes = false;
	}
});


$('#CerrarSesion').click(function(event) {
	sessionStorage.removeItem('user');
	Recargar('http://localhost/AppCardio/FrontEnd/PanelControl/');
});

jQuery(document).ready(function(){
  $(".oculto").hide();              
    $(".inf").click(function(){
          var nodo = $(this).attr("href");  
 
          if ($(nodo).is(":visible")){
               $(nodo).hide();
               return false;
          }else{
        $(".oculto").hide("slow");                             
        $(nodo).fadeToggle("fast");
        return false;
          }
    });
});

jQuery(document).ready(function(){
     $('.date').datetimepicker({
         format: 'YYYY-MM-DD'
     });
});

