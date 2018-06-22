<?php

	class EnlacesPaginas{
		public static function enlacesPaginasModel($enlace){
			if($enlace=="lugares" || $enlace=="sesion" || $enlace=="alumnas" || $enlace=="grupos" || $enlace=="verGrupos" || $enlace=="editarGrupo" || $enlace=="verAlumnas" || $enlace=="editarAlumna" || $enlace=="verPagos" || $enlace=="selectAlumnas" || $enlace=="editarPago"){
				$module = "views/modules/$enlace.php";
			}else{
				$module = "views/modules/inicio.php";
			}

			return $module;
		}
	}

?>