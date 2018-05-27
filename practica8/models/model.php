<?php
	
	class EnlacesPaginas{

		public static function enlacesPaginasModel($enlacesModel){
			if($enlacesModel=="alumnos"||$enlacesModel=="maestros"||$enlacesModel=="mostrarCarreras"||$enlacesModel=="tutorias"||$enlacesModel=="reportes" || $enlacesModel=="carreras" || $enlacesModel=="editarCarreras" || $enlacesModel=="mostrarMaestros" || $enlacesModel=="editarMaestros" || $enlacesModel=="mostrarAlumno" || $enlacesModel=="editarAlumnos" || $enlacesModel=="mostrarTutorias" || $enlacesModel=="tutorias" || $enlacesModel=="editarTutoria" || $enlacesModel=="salir"){

				$module = "views/modules/$enlacesModel.php";

			}else if($enlacesModel=="index"){
				$module = "views/modules/inicio.php";
			}else if($enlacesModel=="okM"){
				$module = "views/modules/mostrarTutorias.php";
			}else if($enlacesModel=="okA"){
				$module = "views/modules/mostrarAlumno.php";
			}else{
				$module = "views/modules/inicio.php";
			}

			return $module;
		}
	}

?>
