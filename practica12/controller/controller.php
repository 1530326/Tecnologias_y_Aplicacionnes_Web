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

		public function ingresarController(){
			if(isset($_POST["emailLogin"])){
				$datosController = array( "email"=>$_POST["emailLogin"],
										  "contra"=>$_POST["passLogin"]);

				$respuesta = Datos::ingresarModel($datosController, "usuarios");

				if($respuesta["email"] == $_POST["emailLogin"] && $respuesta["contra"] == $_POST["passLogin"]){
					session_start();
					$_SESSION["id"] = $respuesta["id_usuario"];
					echo "<script>location.href='index.php?action=ok';</script>";
				}else{
					echo "<script>location.href='index.php';</script>";
				}
			}
		}

		//Función que recoge los datos del formulario de usuario y los manda al método del modelo para ser agregado a la base de datos
		public function addUserController(){
			if(isset($_POST["nomUsuario"])){
				$fecha = date("Y-m-d");
				$datosController = array( "nombre"=>$_POST["nomUsuario"],
										  "apellido"=>$_POST["apeUsuario"],
										  "nickname"=>$_POST["nickUsuario"],
										  "correo"=>$_POST["correoUsuario"],
										  "contra"=>$_POST["contraUsuario"],
										  "fecha"=>$fecha);

				$respuesta = Datos::addUserModel($datosController, "usuarios");

				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=mostrarUsuarios';</script>";
					//echo "<script>alert('El usuario se ha registrado exitosamente');</script>";
				}else{
					echo "<script>alert('Ha ocurrido un error');</script>";
				}
			}
		}

		//dibuja en la vista los tr de la tabla de usuarios con sus respectivos datos
		public function vistaUsuariosController(){

			$respuesta = Datos::vistaUsuariosModel("usuarios");

			foreach($respuesta as $row => $item){
				echo'<tr>
					<td>'.$item["id_usuario"].'</td>
					<td>'.$item["nombre"].'</td>
					<td>'.$item["apellido"].'</td>
					<td>'.$item["nombre_usuario"].'</td>
					<td>'.$item["email"].'</td>
					<td>'.$item["fecha_agregado"].'</td>
					<td><a href="index.php?action=editarUsuario&id='.$item["id_usuario"].'" class="btn btn-block btn-info">Editar</a> <a href="index.php?action=mostrarUsuarios&idBorrar='.$item["id_usuario"].'" class="btn btn-block btn-danger">Borrar</a></td>
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

			 <div class="box-footer">
			 	<input type="submit" value="Actualizar" class="btn btn-info pull-right">
			 </div>';

		}

		//actualiza los datos del usuario seleccionado
		public function actualizarUsuariosController(){
			if(isset($_POST["idEditarUsuario"])){
				$fecha = date("Y-m-d");
				$datosController = array( "id"=>$_POST["idEditarUsuario"],
										  "nombre"=>$_POST["nombreEditar"],
										  "apellido"=>$_POST["apellidoEditar"],
										  "nickname"=>$_POST["nicknameEditar"],
										  "correo"=>$_POST["emailEditar"],
										  "contra"=>$_POST["contraEditar"],
										  "fecha"=>$fecha);
			
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
										  "fecha"=>$fecha);

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

			$respuesta = Datos::vistaCategoriasModel("categorias");

			foreach($respuesta as $row => $item){
				echo'<tr>
					<td>'.$item["id_categoria"].'</td>
					<td>'.$item["nombre"].'</td>
					<td>'.$item["descripcion"].'</td>
					<td>'.$item["fecha_agregado"].'</td>
					<td><a href="index.php?action=editarCategoria&id='.$item["id_categoria"].'" class="btn btn-block btn-info">Editar</a> <a href="index.php?action=mostrarCategorias&idBorrar='.$item["id_categoria"].'" class="btn btn-block btn-danger">Borrar</a></td>
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
			 	<input type="submit" value="Actualizar" class="btn btn-info pull-right">
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
			return $respuesta = Datos::listarCategoriasModel("categorias");
		}

		//Función que recoge los datos del formulario de productos y los manda al método del modelo para ser agregado a la base de datos
		public function addProductoController(){
			if(isset($_POST["codProducto"])){
				$fecha = date("Y-m-d");
				$datosController = array( "codigo"=>$_POST["codProducto"],
										  "nombre"=>$_POST["nombre"],
										  "precio"=>$_POST["precio"],
										  "stock"=>$_POST["stock"],
										  "categoria"=>$_POST["categoria"],
										  "fecha"=>$fecha);

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

			$respuesta = Datos::vistaProductosModel("productos");

			foreach($respuesta as $row => $item){
				$categoria = Datos::listOneCategoriaModel($item["id_categoria"],"categorias");
				echo'<tr>
					<td>'.$item["id_producto"].'</td>
					<td>'.$item["codigo_producto"].'</td>
					<td>'.$item["nombre"].'</td>
					<td>'.$item["fecha_agregado"].'</td>
					<td>'.$item["precio"].'</td>
					<td>'.$item["stock"].'</td>
					<td>'.$categoria[0].'</td>
					<td><a href="index.php?action=verProducto&id='.$item["id_producto"].'" class="btn btn-block btn-success">Ver</a><a href="index.php?action=editarProducto&id='.$item["id_producto"].'" class="btn btn-block btn-info">Editar</a> <a href="index.php?action=mostrarProductos&idBorrar='.$item["id_producto"].'" class="btn btn-block btn-danger">Borrar</a></td>
				</tr>';
			}
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
			$categorias = Datos::listarCategoriaMenosUnaModel($respuesta["id_categoria"],"categorias");
			$categoriaP = Datos::listOneCategoriaModel($respuesta["id_categoria"],"categorias");

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
			    <select name="categoriaEditar" class="form-control">
			    	<option value="'.$respuesta["id_categoria"].'">'.$categoriaP[0].'</option>';
			    	foreach($categorias as $cat):
						echo '<option value="'.$cat["id_categoria"].'">'.$cat["nombre"].'</option>';
					endforeach;
			echo '</select>
			 </div>

			 <div class="box-footer">
			 	<input type="submit" value="Actualizar" class="btn btn-info pull-right">
			 </div>';

		}

		//actualiza los datos de la categoría seleccionada
		public function actualizarProductosController(){
			if(isset($_POST["idEditarProducto"])){
				$fecha = date("Y-m-d");
				$datosController = array( "id"=>$_POST["idEditarProducto"],
										  "codigo"=>$_POST["codigoEditar"],
										  "nombre"=>$_POST["nombreEditar"],
										  "precio"=>$_POST["precioEditar"],
										  "categoria"=>$_POST["categoriaEditar"],
										  "fecha"=>$fecha);
			
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
				$datosController = array( "id_usuario"=>5,
										  "id_producto"=>$_GET["id"],
										  "nota"=>$_POST["nota"],
										  "referencia"=>$_POST["referencia"],
										  "cantidad"=>$_POST["cantidad"],
										  "fecha"=>$fecha);
			
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
					$datosController = array( "id_usuario"=>5,
										  "id_producto"=>$_GET["id"],
										  "nota"=>$_POST["nota"],
										  "referencia"=>$_POST["referencia"],
										  "cantidad"=>$_POST["cantidad"],
										  "fecha"=>$fecha);
			
					$respuesta = Datos::addSalidaModel($datosController, "historial", $stockActual);

					if($respuesta == "success"){
						echo "<script>location.href='index.php?action=verProducto&id=".$_GET["id"]."';</script>";
					}else{
						echo "<script>alert('Algo salio mal');</script>";
					}
				}
			}
		}
	}
?>