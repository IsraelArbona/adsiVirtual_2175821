<?php
	/*
	* Cargamos todos los controladores...
	*/
	require_once 'Controladores/UsuariosCtrl.php';
	require_once 'Controladores/BarriosCtrl.php';
	require_once 'Controladores/CiudadesCtrl.php';
	require_once 'Controladores/MedicamentosCtrl.php';
	require_once 'Controladores/PacientesCtrl.php';
	require_once 'Controladores/Cum_ProgramasCtrl.php';
	require_once 'Controladores/HipercolesterolemiaCtrl.php';
	require_once 'Controladores/Hipertension_ArterialCtrl.php';
	require_once 'Controladores/DeabetesCtrl.php';
	require_once 'Controladores/ObesidadCtrl.php';

	/*
	* Definimos que sera una aplicación de tipo JSON
	* Permitimos el acceso a todos los clientes
	* Permitimos que los clientes usen POTS
	*/
	header ( 'content-type: application/json; charset=utf-8' );
	header ( 'Access-Control-Allow-Origin: *' );
	header ( 'Access-Control-Allow-Methods: POST' );
	
	$respuesta;
	$instancia;
	if (isset($_GET['PATH_INFO'])){
		$peticion = explode ( '/', $_GET ['PATH_INFO'] );
		$recurso = array_shift ($peticion); //Obtenemos el recurso a solicitar
		$recursos_existentes = array(
				'Usuarios',
				'Barrios',
				'Ciudades',
				'Medicamentos',
				'Pacientes',
				'Cum_Programas',
				'Hipertension_Arterial',
				'Hipercolesterolemia',
				'Deabetes',
				'Obesidad'
		);//Definimos los recursos existentes y validamos que el solicitado exista
		if (in_array ( $recurso, $recursos_existentes )) {
			//Por seguridad validamos el metodo para que sea post
			$metodo = strtolower ( $_SERVER ['REQUEST_METHOD'] );
			if($metodo === 'post'){
				//Enrutamos a donde la peticion lo desee
				switch ($recurso) {
					case 'Usuarios':
						$instancia = new Usuario($peticion);
						break;
					case 'Barrios':
						$instancia = new Barrio($peticion);
						break;
					case 'Ciudades':
						$instancia = new Ciudad($peticion);
						break;
					case 'Medicamentos':
						$instancia = new Medicamento($peticion);
						break;
					case 'Pacientes':
						$instancia = new Paciente($peticion);
						break;							
					case 'Cum_Programas':
						$instancia = new Cum_Programa($peticion);
						break;
					case 'Hipertension_Arterial':
						$instancia = new Hipertension_Arterial($peticion);
						break;
					case 'Hipercolesterolemia':
						$instancia = new Hipercolesterolemia($peticion);
						break;							
					case 'Deabetes':
						$instancia = new Deabete($peticion);
						break;
					case 'Obesidad':
						$instancia = new Inmueble($peticion);
						break;	
				}

				$respuesta = $instancia->respuesta;
			}else
				$respuesta = array(
					'Estado' => 2,
					'Mensaje'=>'No se reconoce el metodo'
				);

		}else
		$respuesta = array(
			'Estado' => 2,
			'Mensaje'=>'No se reconoce el recurso'
		);
	}
	else
		$respuesta = array(
			'Estado' => 2,
			'Mensaje'=>'No se reconoce la petición'
		);

	
	echo json_encode($respuesta);
?>

