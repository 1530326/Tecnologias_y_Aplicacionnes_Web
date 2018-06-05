<?php
	class EnlacesPaginas{

		public static function enlacesPaginasModel($enlacesModel){
			if($enlacesModel=="agregarProducto" || $enlacesModel=="editarProducto" || $enlacesModel=="mostrarProductos" || $enlacesModel=="verProducto"){

				$module = "views/modules/$enlacesModel.php";

			}else if($enlacesModel=="agregarHistorial" || $enlacesModel=="eliminarHistorial"){

				$module = "views/modules/$enlacesModel.php";

			}else if($enlacesModel=="mostrarUsuarios"){

				$module = "views/modules/mostrarUsuarios.php";

		    }else if($enlacesModel=="agregarUsuario"){

		    	$module = "views/modules/agregarUsuario.php";

		    }else if($enlacesModel=="dashboard"){

		    	$module = "views/modules/dashboard.php";

			}else if($enlacesModel=="editarUsuario"){

				$module = "views/modules/editarUsuario.php";

			}else if($enlacesModel=="mostrarCategorias" || $enlacesModel=="agregarCategoria" || $enlacesModel=="editarCategoria"){

				$module = "views/modules/$enlacesModel.php";

			}else if($enlacesModel=="ok"){

				$module = "views/modules/dashboard.php";

			}else{

				$module = "views/modules/inicio.php";
			}

			return $module;
		}
	}
?>