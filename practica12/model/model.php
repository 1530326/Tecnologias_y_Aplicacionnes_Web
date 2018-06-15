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

			}else if($enlacesModel=="salir"){

				$module = "views/modules/salir.php";

			}else if($enlacesModel=="agregarTienda" || $enlacesModel=="mostrarTiendas" || $enlacesModel=="editarTienda" || $enlacesModel=="verTienda" || $enlacesModel=="dashboard2"){

				$module = "views/modules/$enlacesModel.php";

			}else if($enlacesModel=="okA" || $enlacesModel=="dashboardAdmin"){
			
				$module = "views/modules/dashboardAdmin.php";

			}else if($enlacesModel=="mostrarVentas" || $enlacesModel=="agregarVenta" || $enlacesModel=="agregarVentaProd" || $enlacesModel=="terminarVenta" || $enlacesModel=="quitarItem" || $enlacesModel=="salirTienda"){

				$module = "views/modules/$enlacesModel.php";

			}else{

				$module = "views/modules/inicio.php";
			}

			return $module;
		}
	}
?>