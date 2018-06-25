<?php

	//clase EnlacesPaginas es uno de los archivos que controla la navegación del sitio
	class EnlacesPaginas{
		//este método recibe como parámetro el action de la URL
		public static function enlacesPaginasModel($enlace){
			//si el enlace es igual a cualquiera de estos
			if($enlace=="lugares" || $enlace=="sesion" || $enlace=="alumnas" || $enlace=="grupos" || $enlace=="verGrupos" || $enlace=="editarGrupo" || $enlace=="verAlumnas" || $enlace=="editarAlumna" || $enlace=="verPagos" || $enlace=="selectAlumnas" || $enlace=="editarPago"){
				$module = "views/modules/$enlace.php"; //se retorna la ruta de dicho archivo
			}else{
				//si no, el default es la página de inicio
				$module = "views/modules/inicio.php";
			}
			//se retorna el valor, para ser incluido en el sitio
			return $module;
		}
	}

?>