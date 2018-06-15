<?php

	class MvcController
	{
		public function enlacesPaginasController(){
			if(isset( $_GET['action'])){
			
				$enlaces = $_GET['action'];
		
			}else{

				$enlaces = "inicio";
			}

			$respuesta = EnlacesPaginas::enlacesPaginasModel($enlaces);

			include $respuesta;
		}
		
		public function plantilla(){
			include("views/template.php");
		}

		public function notificaciones($tienda){
			$respuesta = Datos::notificacionesModel("productos",$tienda);
			return $respuesta;
		}

		//controlador que recoge y manda los datos ingresados por el usuario en el formulario de login, si se encuentra que los datos son verdadeors se inicializan las variables de sesión
		public function ingresarController(){
			if(isset($_POST["emailLogin"])){
				$datosController = array( "email"=>$_POST["emailLogin"],
										  "contra"=>$_POST["passLogin"]);

				$respuesta = Datos::ingresarModel($datosController, "usuarios");

				if($respuesta["email"] == $_POST["emailLogin"] && $respuesta["contra"] == $_POST["passLogin"]){
					$_SESSION["id"] = $respuesta["id_usuario"];
					$_SESSION["usuario"] = $respuesta["nombre_usuario"];
					$_SESSION["contra"] = $respuesta["contra"];
					$_SESSION["fecha"] = $respuesta["fecha_agregado"];
					$_SESSION["ruta"] = $respuesta["foto"];
					$_SESSION["tipo"] = $respuesta["tipo_usuario"];
					$_SESSION["tienda"] = $respuesta["id_tienda"];

					$respuestaTienda = Datos::ingresaTiendaModel($respuesta["id_tienda"]);

					$_SESSION["nomTienda"] = $respuestaTienda["nombre"];
					$_SESSION["direTienda"] = $respuestaTienda["direccion"];
					$_SESSION["fechaTienda"] = $respuestaTienda["fecha"];
					$_SESSION["estado"] = $respuestaTienda["estado"];

					if($respuesta["tipo_usuario"]=="admin"){
						echo "<script>location.href='index.php?action=okA';</script>";
					}else{
						if($respuestaTienda["estado"]==1){
							echo "<script>location.href='index.php?action=ok';</script>";
						}else{
							unset($_SESSION["carrito"]);
							$_SESSION["carrito"] = [];
							$_SESSION["id"] = NULL;
							session_destroy();
							echo "<script>location.href='index.php';</script>";
						}
					}
				}else{
					echo "<script>location.href='index.php';</script>";
				}
			}
		}

		//Función que recoge los datos del formulario de usuario y los manda al método del modelo para ser agregado a la base de datos
		public function addUserController(){
			if(isset($_POST["nomUsuario"])){
				$ruta = "views/tools/img/";
				$ruta2 = $ruta.$_FILES["fotoUsuario"]["name"];
				copy($_FILES["fotoUsuario"]["tmp_name"], $ruta2);
				$fecha = date("Y-m-d");
				$datosController = array( "nombre"=>$_POST["nomUsuario"],
										  "apellido"=>$_POST["apeUsuario"],
										  "nickname"=>$_POST["nickUsuario"],
										  "correo"=>$_POST["correoUsuario"],
										  "contra"=>$_POST["contraUsuario"],
										  "fecha"=>$fecha,
										  "ruta"=>$ruta2,
										  "tipo"=>"normal",
										  "tienda"=>$_SESSION["tienda"]);

				$respuesta = Datos::addUserModel($datosController, "usuarios");

				if($respuesta == "success"){
					if($_SESSION["tipo"]=="admin"){
						echo "<script>location.href='index.php?action=verTienda&id=$_SESSION[tienda]';</script>";
					}else{
						echo "<script>location.href='index.php?action=mostrarUsuarios';</script>";
					}
				}else{
					echo "<script>alert('Ha ocurrido un error');</script>";
				}
			}
		}

		//dibuja en la vista los tr de la tabla de usuarios con sus respectivos datos
		public function vistaUsuariosController(){

			$respuesta = Datos::vistaUsuariosModel("usuarios", $_SESSION["tienda"]);

			foreach($respuesta as $row => $item){
				echo'<tr>
					<td>'.$item["id_usuario"].'</td>
					<td>'.$item["nombre"].'</td>
					<td>'.$item["apellido"].'</td>
					<td>'.$item["nombre_usuario"].'</td>
					<td>'.$item["email"].'</td>
					<td>'.$item["fecha_agregado"].'</td>
					<td><a href="index.php?action=editarUsuario&id='.$item["id_usuario"].'" class="btn btn-info">Editar</a> <a onclick="confirmar('.$item["id_usuario"].');" class="btn btn-danger">Borrar</a></td>
				</tr>';
			}
		}

		//borra el usuario de la tabla
		public function borrarUsuariosController(){

			if(isset($_GET["idBorrar"])){
				$datosController = $_GET["idBorrar"];
				$respuesta = Datos::borrarUsuariosModel($datosController, "usuarios");

				if($respuesta == "success"){
					//header("location:index.php?action=mostrarUsuarios");
					echo "<script>location.href='index.php?action=mostrarUsuarios';</script>";
				}

			}
		}

		//pone en el formulario de editarUsuario los valores que se encuentran registrados en la base de datos de acuerdo a su id
		public function editarUsuariosController(){
			$datosController = $_GET["id"];
			$respuesta = Datos::editarUsuariosModel($datosController, "usuarios");

			echo'<input type="hidden" value="'.$respuesta["id_usuario"].'" name="idEditarUsuario">

			 <div class="form-group">
                <label>Nombre: </label>
			    <input type="text" class="form-control" value="'.$respuesta["nombre"].'" name="nombreEditar" required>
			 </div>

			 <div class="form-group">
                <label>Apellido: </label>
			 	<input type="text" class="form-control" value="'.$respuesta["apellido"].'" name="apellidoEditar" required>
			 </div>

			 <div class="form-group">
                <label>Nombre de usuario: </label>
			 	<input type="text" class="form-control" value="'.$respuesta["nombre_usuario"].'" name="nicknameEditar" required>
			 </div>

			 <div class="form-group">
                <label>Correo Electrónico: </label>
			 	<input type="text" class="form-control" value="'.$respuesta["email"].'" name="emailEditar" required>
			 </div>

			 <div class="form-group">
                <label>Contraseña: </label>
			 	<input type="text" class="form-control" value="'.$respuesta["contra"].'" name="contraEditar" required>
			 </div>

			 <div class="form-group">
                <label>Imagen: </label>
			 	<input type="file" class="form-control" name="fotoEditar" accept="image/*" required>
			 </div>

			 <div class="box-footer">
			 <input type="button" onclick="confirmarE();" value="Actualizar" class="btn btn-info pull-right">
			 </div>';

		}

		//actualiza los datos del usuario seleccionado
		public function actualizarUsuariosController(){
			if(isset($_POST["idEditarUsuario"])){
				$ruta = "views/tools/img/";
				$ruta2 = $ruta.$_FILES["fotoEditar"]["name"];
				copy($_FILES["fotoEditar"]["tmp_name"], $ruta2);
				$fecha = date("Y-m-d");
				$datosController = array( "id"=>$_POST["idEditarUsuario"],
										  "nombre"=>$_POST["nombreEditar"],
										  "apellido"=>$_POST["apellidoEditar"],
										  "nickname"=>$_POST["nicknameEditar"],
										  "correo"=>$_POST["emailEditar"],
										  "contra"=>$_POST["contraEditar"],
										  "fecha"=>$fecha,
										  "ruta"=>$ruta2);
			
				$respuesta = Datos::actualizarUsuariosModel($datosController, "usuarios");

				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=mostrarUsuarios';</script>";
				}else{
					echo "<script>alert('Algo salio mal');</script>";
				}
			}
		}

		//---------------------------------CATEGORÍAS----------------------------------
		//Función que recoge los datos del formulario de categoria y los manda al método del modelo para ser agregado a la base de datos
		public function addCategoriaController(){
			if(isset($_POST["nombre"])){
				$fecha = date("Y-m-d");
				$datosController = array( "nombre"=>$_POST["nombre"],
										  "descripcion"=>$_POST["descripcion"],
										  "fecha"=>$fecha,
										  "tienda"=>$_SESSION["tienda"]);

				$respuesta = Datos::addCategoriaModel($datosController, "categorias");

				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=mostrarCategorias';</script>";
				}else{
					echo "<script>alert('Ha ocurrido un error');</script>";
				}
			}
		}

		//dibuja en la vista los tr de la tabla de categorias con sus respectivos datos
		public function vistaCategoriasController(){

			$respuesta = Datos::vistaCategoriasModel("categorias",$_SESSION["tienda"]);

			foreach($respuesta as $row => $item){
				echo'<tr>
					<td>'.$item["id_categoria"].'</td>
					<td>'.$item["nombre"].'</td>
					<td>'.$item["descripcion"].'</td>
					<td>'.$item["fecha_agregado"].'</td>
					<td><a href="index.php?action=editarCategoria&id='.$item["id_categoria"].'" class="btn btn-info">Editar</a> <a onclick="confirmar('.$item["id_categoria"].');" class="btn btn-danger">Borrar</a></td>
				</tr>';
			}
		}

		//borra la categoria de la tabla
		public function borrarCategoriasController(){

			if(isset($_GET["idBorrar"])){
				$datosController = $_GET["idBorrar"];
				$respuesta = Datos::borrarCategoriasModel($datosController, "categorias");

				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=mostrarCategorias';</script>";
				}

			}
		}

		//pone en el formulario de editarCategoria los valores que se encuentran registrados en la base de datos de acuerdo a su id
		public function editarCategoriasController(){
			$datosController = $_GET["id"];
			$respuesta = Datos::editarCategoriasModel($datosController, "categorias");

			echo'<input type="hidden" value="'.$respuesta["id_categoria"].'" name="idEditarCategoria">

			 <div class="form-group">
                <label>Nombre: </label>
			    <input type="text" class="form-control" value="'.$respuesta["nombre"].'" name="nombreEditar" required>
			 </div>

			 <div class="form-group">
                <label>Descripción: </label>
                <textarea rows="6" class="form-control" name="descripcionEditar" required>'.$respuesta["descripcion"].'</textarea>
			 </div>

			 <div class="box-footer">
			 <input type="button" onclick="confirmarE();" value="Actualizar" class="btn btn-info pull-right">
			 </div>';

		}

		//actualiza los datos de la categoría seleccionada
		public function actualizarCategoriasController(){
			if(isset($_POST["idEditarCategoria"])){
				$fecha = date("Y-m-d");
				$datosController = array( "id"=>$_POST["idEditarCategoria"],
										  "nombre"=>$_POST["nombreEditar"],
										  "descripcion"=>$_POST["descripcionEditar"],
										  "fecha"=>$fecha);
			
				$respuesta = Datos::actualizarCategoriasModel($datosController, "categorias");

				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=mostrarCategorias';</script>";
				}else{
					echo "<script>alert('Algo salio mal');</script>";
				}
			}
		}

		//---------------------------------PRODUCTOS----------------------------------
		//funcion que lista las categorias existentes
		public function listCategorias(){
			return $respuesta = Datos::listarCategoriasModel("categorias", $_SESSION["tienda"]);
		}

		//Función que recoge los datos del formulario de productos y los manda al método del modelo para ser agregado a la base de datos
		public function addProductoController(){
			if(isset($_POST["codProducto"])){
				$ruta = "views/tools/img/";
				$ruta2 = $ruta.$_FILES["fotoProducto"]["name"];
				copy($_FILES["fotoProducto"]["tmp_name"], $ruta2);
				$fecha = date("Y-m-d");
				$datosController = array( "codigo"=>$_POST["codProducto"],
										  "nombre"=>$_POST["nombre"],
										  "precio"=>$_POST["precio"],
										  "stock"=>$_POST["stock"],
										  "categoria"=>$_POST["categoria"],
										  "fecha"=>$fecha,
										  "ruta"=>$ruta2,
										  "tienda"=>$_SESSION["tienda"]);

				$respuesta = Datos::addProductosModel($datosController, "productos");

				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=mostrarProductos';</script>";
				}else{
					echo "<script>alert('Ha ocurrido un error');</script>";
				}
			}
		}

		//dibuja en la vista los tr de la tabla de productos con sus respectivos datos
		public function vistaProductosController(){
			$respuesta = Datos::vistaProductosModel("productos",$_SESSION["tienda"]);
			foreach($respuesta as $row => $item){
				if($item["id_categoria"]==''){
					$categoria[0] = "Sin categoría";
				}else{
					$categoria = Datos::listOneCategoriaModel($item["id_categoria"],"categorias", $_SESSION["tienda"]);
				}
				echo"<tr>
					<td>$item[id_producto]</td>
					<td>$item[codigo_producto]</td>
					<td>$item[nombre]</td>
					<td>$item[fecha_agregado]</td>
					<td>$item[precio]</td>
					<td>$item[stock]</td>
					<td>$categoria[0]</td>
					<td><a href='index.php?action=verProducto&id=$item[id_producto]' class='btn btn-success'>Ver</a> <a href='index.php?action=editarProducto&id=$item[id_producto]' class='btn btn-info'>Editar</a> <a onclick='confirmar($item[id_producto]);' class='btn btn-danger'>Borrar</a></td>
				</tr>";
			}
		}

		//funcion que lista los productos existentes
		public function listProductos(){
			return $respuesta = Datos::listarProductosModel("productos", $_SESSION["tienda"]);
		}

		//borra el producto de la tabla
		public function borrarProductosController(){
			if(isset($_GET["idBorrar"])){
				$datosController = $_GET["idBorrar"];
				$respuesta = Datos::borrarProductosModel($datosController, "productos");

				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=mostrarProductos';</script>";
				}

			}
		}

		//pone en el formulario de editarProducto los valores que se encuentran registrados en la base de datos de acuerdo a su id
		public function editarProductosController(){
			$datosController = $_GET["id"];
			$respuesta = Datos::editarProductosModel($datosController, "productos");
			if($respuesta["id_categoria"]==''){
				$catAux = 0;
			}else{
				$catAux = $respuesta["id_categoria"];
			}
			$categorias = Datos::listarCategoriaMenosUnaModel($catAux,"categorias", $_SESSION["tienda"]);
			$categoriaP = Datos::listOneCategoriaModel($respuesta["id_categoria"],"categorias", $_SESSION["tienda"]);

			echo'<input type="hidden" value="'.$respuesta["id_producto"].'" name="idEditarProducto">

			 <div class="form-group">
                <label>Código del producto: </label>
			    <input type="text" class="form-control" value="'.$respuesta["codigo_producto"].'" name="codigoEditar" required>
			 </div>

			 <div class="form-group">
                <label>Nombre: </label>
			    <input type="text" class="form-control" value="'.$respuesta["nombre"].'" name="nombreEditar" required>
			 </div>

			 <div class="form-group">
                <label>Precio: </label>
			    <input type="text" class="form-control" value="'.$respuesta["precio"].'" name="precioEditar" required>
			 </div>

			 <div class="form-group">
                <label>Categoría: </label>
			    <select name="categoriaEditar" class="form-control">';
			    	if($categoriaP[0]==''){
			    		foreach($categorias as $cat):
							echo '<option value="'.$cat["id_categoria"].'">'.$cat["nombre"].'</option>';
						endforeach;
			    	}else{
			    		echo '<option value="'.$respuesta["id_categoria"].'">'.$categoriaP[0].'</option>';
			    		foreach($categorias as $cat):
							echo '<option value="'.$cat["id_categoria"].'">'.$cat["nombre"].'</option>';
						endforeach;
			    	}
			echo '</select>
			 </div>

			 <div class="form-group">
                <label>Imagen: </label>
			 	<input type="file" class="form-control" name="fotoPEditar" accept="image/*" required>
			 </div>

			 <div class="box-footer">
			 <input type="button" onclick="confirmarE();" value="Actualizar" class="btn btn-info pull-right">
			 </div>';

		}

		//actualiza los datos de la categoría seleccionada
		public function actualizarProductosController(){
			if(isset($_POST["idEditarProducto"])){
				$ruta = "views/tools/img/";
				$ruta2 = $ruta.$_FILES["fotoPEditar"]["name"];
				copy($_FILES["fotoPEditar"]["tmp_name"], $ruta2);
				$fecha = date("Y-m-d");
				$datosController = array( "id"=>$_POST["idEditarProducto"],
										  "codigo"=>$_POST["codigoEditar"],
										  "nombre"=>$_POST["nombreEditar"],
										  "precio"=>$_POST["precioEditar"],
										  "categoria"=>$_POST["categoriaEditar"],
										  "fecha"=>$fecha,
										  "ruta"=>$ruta2);
			
				$respuesta = Datos::actualizarProductosModel($datosController, "productos");

				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=mostrarProductos';</script>";
				}else{
					echo "<script>alert('Algo salio mal');</script>";
				}
			}
		}

		//retorna la información del producto
		public function mostrarProductoController(){
			$datosController = $_GET["id"];
			$respuesta = Datos::editarProductosModel($datosController, "productos");
			return $respuesta;
		}

		//dibuja en la vista los tr de la tabla de historial de acuerdo al id del producto
		public function vistaHistorialController(){
			$datosController = $_GET["id"];
			$respuesta = Datos::vistaHistorialModel($datosController,"historial");

			foreach($respuesta as $row => $item){
				echo'<tr>
					<td>'.$item["id_historial"].'</td>
					<td>'.$item["id_usuario"].'</td>
					<td>'.$item["fecha"].'</td>
					<td>'.$item["nota"].'</td>
					<td>'.$item["referencia"].'</td>
					<td>'.$item["cantidad"].'</td>
				</tr>';
			}
		}

		//recoge los datos para agregar una nueva entrada en la tabla historial
		public function addHistorialController(){
			if(isset($_POST["nota"])){
				$fecha = date("Y-m-d");
				$respuesta = Datos::editarProductosModel($_GET["id"], "productos");

				$stockActual = $respuesta["stock"] + $_POST["cantidad"];
				$datosController = array( "id_usuario"=>$_SESSION["id"],
										  "id_producto"=>$_GET["id"],
										  "nota"=>$_POST["nota"],
										  "referencia"=>$_POST["referencia"],
										  "cantidad"=>$_POST["cantidad"],
										  "fecha"=>$fecha,
										  "tienda"=>$_SESSION["tienda"]);
			
				$respuesta = Datos::addEntradaModel($datosController, "historial", $stockActual);

				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=verProducto&id=".$_GET["id"]."';</script>";
				}else{
					echo "<script>alert('Algo salio mal');</script>";
				}
			}
		}

		//recoge los datos para agregar una nueva salida en la tabla historial
		public function removeHistorialController(){
			if(isset($_POST["nota"])){
				$fecha = date("Y-m-d");
				$respuesta = Datos::editarProductosModel($_GET["id"], "productos");

				if($respuesta["stock"]<$_POST["cantidad"]){
					echo "<script>alert('La cantidad del stock es menor que la cantidad ingresada');</script>";
				}else{
					$stockActual = $respuesta["stock"] - $_POST["cantidad"];
					$datosController = array( "id_usuario"=>$_SESSION["id"],
										  "id_producto"=>$_GET["id"],
										  "nota"=>$_POST["nota"],
										  "referencia"=>$_POST["referencia"],
										  "cantidad"=>$_POST["cantidad"],
										  "fecha"=>$fecha,
										  "tienda"=>$_SESSION["tienda"]);
			
					$respuesta = Datos::addSalidaModel($datosController, "historial", $stockActual);

					if($respuesta == "success"){
						echo "<script>location.href='index.php?action=verProducto&id=".$_GET["id"]."';</script>";
					}else{
						echo "<script>alert('Algo salio mal');</script>";
					}
				}
			}
		}

		//--------------------SECCIÓN DASHBOARD-----------------------
		public function contarController($tabla, $tienda){
			return Datos::contarModel($tabla, $tienda);
		}

		//--------------------SECCIÓN DASHBOARD ADMIN-----------------------
		public function contarAdminController($tabla){
			return Datos::contarAdminModel($tabla);
		}

		public function nombreTiendaController($id){
			$res = Datos::nombreTiendaModel($id);
			return $res[0];
		}
		//--------------------SECCIÓN TIENDAS-----------------------
		//Función que recoge los datos del formulario de tienda y los manda al método del modelo para ser agregado a la base de datos, este modulo solo es visible para el administrador
		public function addTiendaController(){
			if(isset($_POST["nomTienda"])){
				$fecha = date("Y-m-d");
				$datosController = array( "nombre"=>$_POST["nomTienda"],
										  "direccion"=>$_POST["direTienda"],
										  "fecha"=>$fecha);

				$respuesta = Datos::addTiendaModel($datosController, "tienda");

				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=mostrarTiendas';</script>";
				}else{
					echo "<script>alert('Ha ocurrido un error');</script>";
				}
			}
		}

		//dibuja en la vista los tr de la tabla de tienda con sus respectivos datos
		public function vistaTiendasController(){
			$respuesta = Datos::vistaTiendasModel("tienda");
			foreach($respuesta as $row => $item){
				if($item["estado"]==1){
					$estado = "Activa";
				}else{
					$estado = "Desactivada";
				}
				echo"<tr>
					<td>$item[id_tienda]</td>
					<td>$item[nombre]</td>
					<td>$item[direccion]</td>
					<td>$item[fecha]</td>
					<td>$estado</td>
					<td><a href='index.php?action=verTienda&id=$item[id_tienda]' class='btn btn-success'>Ver</a> <a href='index.php?action=editarTienda&id=$item[id_tienda]' class='btn btn-info'>Editar</a> <a onclick='confirmar($item[id_tienda]);' class='btn btn-danger'>Borrar</a> <a onclick='confirmarA($item[id_tienda]);' class='btn bg-olive'>Activar</a> <a onclick='confirmarD($item[id_tienda]);' class='btn bg-orange'>Desactivar</a></td>
				</tr>";
			}
		}

		//borra la tienda de la tabla
		public function borrarTiendasController(){
			if(isset($_GET["idBorrar"])){
				$datosController = $_GET["idBorrar"];
				$respuesta = Datos::borrarTiendasModel($datosController, "tienda");

				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=mostrarTiendas';</script>";
				}

			}
		}

		//--------------------------------ACTIVAR/DESACTIVAR TIENDAS---------------------------
		//borra la tienda de la tabla
		public function activarTiendasController(){
			if(isset($_GET["idActivar"])){
				$datosController = $_GET["idActivar"];
				$respuesta = Datos::activarTiendasModel($datosController, "tienda");

				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=mostrarTiendas';</script>";
				}

			}
		}
		//borra la tienda de la tabla
		public function desactivarTiendasController(){
			if(isset($_GET["idDesactivar"])){
				$datosController = $_GET["idDesactivar"];
				$respuesta = Datos::desactivarTiendasModel($datosController, "tienda");

				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=mostrarTiendas';</script>";
				}

			}
		}

		//pone en el formulario de editarTienda los valores que se encuentran registrados en la base de datos de acuerdo a su id
		public function editarTiendasController(){
			$datosController = $_GET["id"];
			$respuesta = Datos::editarTiendasModel($datosController, "tienda");

			echo'<input type="hidden" value="'.$respuesta["id_tienda"].'" name="idEditarTienda">

			 <div class="form-group">
                <label>Código del producto: </label>
			    <input type="text" class="form-control" value="'.$respuesta["nombre"].'" name="nombreEditar" required>
			 </div>

			 <div class="form-group">
                <label>Nombre: </label>
			    <input type="text" class="form-control" value="'.$respuesta["direccion"].'" name="direccionEditar" required>
			 </div>

			 <div class="box-footer">
			 <input type="button" onclick="confirmarE();" value="Actualizar" class="btn btn-info pull-right">
			 </div>';

		}

		//actualiza los datos de la tienda seleccionada
		public function actualizarTiendasController(){
			if(isset($_POST["idEditarTienda"])){
				$fecha = date("Y-m-d");
				$datosController = array( "id"=>$_POST["idEditarTienda"],
										  "nombre"=>$_POST["nombreEditar"],
										  "direccion"=>$_POST["direccionEditar"],
										  "fecha"=>$fecha);
			
				$respuesta = Datos::actualizarTiendasModel($datosController, "tienda");

				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=mostrarTiendas';</script>";
				}else{
					echo "<script>alert('Algo salio mal');</script>";
				}
			}
		}

		//---------------------------SECCIÓN VENTAS------------------------------
		//dibuja en la vista los tr de la tabla de ventas y detalles venta con sus respectivos datos
		public function vistaVentasController(){
			$respuesta = Datos::vistaVentasModel("ventas", $_SESSION["tienda"]);

			foreach($respuesta as $row => $item){
				echo'<tr>
					<td>'.$item["id"].'</td>
					<td>'.$item["fecha"].'</td>
					<td>
						<table class="table table-hover">
							<tr>
								<th>ID Producto</th>
              					<th>Nombre</th>
              					<th>Precio</th>
              					<th>Cantidad</th>
							</tr>
							<tbody>';
								$productos = Datos::vistaVentasProductosModel("detalles_venta", $item["id"]);
								foreach($productos as $prod):
									echo '<tr>
										<td>'.$prod["id_producto"].'</td>
										<td>'.$prod["nombre"].'</td>
										<td>'.$prod["precio"].'</td>
										<td>'.$prod["cantidad"].'</td>
										<tr>';
								endforeach;
						echo '</tbody>
						</table>
					</td>
					<td>'.$item["total"].'</td>
					<td><a onclick="confirmar('.$item["id"].');" class="btn btn-danger">Borrar</a></td>
				</tr>';
			}
		}

		//borra la tienda de la tabla
		public function borrarVentasController(){
			if(isset($_GET["idBorrar"])){
				$datosController = $_GET["idBorrar"];
				$respuesta = Datos::borrarVentasModel($datosController, "ventas");

				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=mostrarVentas';</script>";
				}

			}
		}

		//------------------------------------VENTAS-------------------------------------
		//agrega dinamicamente los productos a comprar en la venta
		public function agregarAlCarrito(){
			if(isset($_POST["idProducto"])){
				$resultado = Datos::agregarAlCarritoModel("productos",$_POST["idProducto"]);

					if($resultado->stock < 1){
						echo "<script>location.href='index.php?action=agregarVenta&status=1';</script>";
						exit;
					}

					$indice = false;
					for ($i=0; $i < count($_SESSION["carrito"]); $i++) { 
						if($_SESSION["carrito"][$i]->id_producto === $_POST["idProducto"]){
							$indice = $i;
							break;
						}
					}
					if($indice === FALSE){
						$resultado->cantidad = 1;
						$resultado->total = $resultado->precio;
						array_push($_SESSION["carrito"], $resultado);
					}else{
						$_SESSION["carrito"][$indice]->cantidad++;
						if($resultado->stock<$_SESSION["carrito"][$indice]->cantidad){
							$_SESSION["carrito"][$indice]->cantidad--;
							echo "<script>location.href='index.php?action=agregarVenta&status=2';</script>";
							exit;
						}
						$_SESSION["carrito"][$indice]->total = $_SESSION["carrito"][$indice]->cantidad * $_SESSION["carrito"][$indice]->precio;
					}
					echo "<script>location.href='index.php?action=agregarVenta';</script>";
			}
		}

		//agrega los productos y la venta a la base de datos
		public function agregarTerminarVenta(){
			$total = $_POST["total"];
			$fecha = date("Y-m-d");

			$datosController = array( "fecha"=>$fecha,
									  "total"=>$total,
									  "tienda"=>$_SESSION["tienda"],
									  "usuario"=>$_SESSION["id"]);
			$id = Datos::agregarVentaModel($datosController, "ventas");

			$resultado = Datos::agregarDetallesModel($id[0], "detalles_venta", $datosController);

			if($resultado == "success"){
				unset($_SESSION["carrito"]);
				$_SESSION["carrito"] = [];
				echo "<script>location.href='index.php?action=mostrarVentas';</script>";
			}else{
				echo "<script>alert('Algo salio mal');</script>";
			}
		}
	}
?>