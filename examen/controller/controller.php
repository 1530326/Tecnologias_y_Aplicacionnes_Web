<?php

	class MvcController{
		//este método incluye la plantilla a utilizar en el proyecto
		public function plantilla(){
			include("views/foundation.php");
		}

		//este método es el que controla que página se va a mostrar de acuerdo a lo que contenga la variable action
		public function enlacesPaginasController(){
			if(isset($_GET["action"])){
				$enlace = $_GET["action"];
			}else{
				$enlace = "inicio"; //si action no se encuentra se envía a la página de inicio
			}
			//se manda llamar el método que se encuentra en la clase EnlacesPaginas para que retorne la dirección
			$respuesta = EnlacesPaginas::enlacesPaginasModel($enlace);
			include $respuesta;
		}

		//este método controla el inicio de sesión del usuario(admin) 
		public function ingresarController(){
			//si hay algo en la variable usuario del formulario de inicio de sesión
			if(isset($_POST["usuario"])){
				//se pasan a un arreglo los valores traídos por el método POST
				$datosController = array( "usuario"=>$_POST["usuario"],
										  "contra"=>$_POST["contra"]);

				//se ejecuta la función ingresarModel envíando como parámetros el usuario y la contraseña que se encuentran en el arreglo de datosController y la tabla donde se hará la búsqueda
				$respuesta = Datos::ingresarModel($datosController, "usuarios");

				//se compara si los resultados traídos por el método ingresarModel son iguales a las que trae el método POST
				if($respuesta["nombre"] == $_POST["usuario"] && $respuesta["contra"] == $_POST["contra"]){
					//se crean las variables de sesión
					$_SESSION["nombre"] = $respuesta["nombre"];
					$_SESSION["contra"] = $respuesta["contra"];
					$_SESSION["activo"] = true;
					//se redirecciona a la página de admin
					echo "<script>location.href='index.php?action=verPagos';</script>";
				}else{
					//si los datos no coinciden se envía a la página de incio, esto significa que se denegó el acceso
					echo "<script>location.href='index.php?action=inicio';</script>";
				}
			}
		}

		//--------------------------------GRUPOS------------------------------------
		//agregar un nuevo grupo
		public function addGrupoController(){
			if(isset($_POST["grupoNombre"])){
				//se agrega el nombre del grupo al arreglo
				$datosController = array( "nombre"=>$_POST["grupoNombre"]);

				//se ejecuta el método del modelo para hacer la insercción, se envía el nombre del grupo y la tabla donde se realizará la inserción
				$respuesta = Datos::addNewGrupo($datosController, "grupo");

				//si la transacción fue correcta se redirecciona a la página principal de los grupos
				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=verGrupos';</script>";
				}else{
					//si no, se notifica al usuario que ha ocurrido un error
					echo "<script>alert('Ha ocurrido un error');</script>";
				}
			}
		}

		//este método lista todos los grupos que se encuentran registrados en la base de datos
		public function vistaGruposController(){
			$respuesta = Datos::vistaGruposModel("grupo"); //obtiene todos los campos de todos los registros

			//se imprime la tabla con los campos correspondientes 
			foreach($respuesta as $row => $item){
				echo'<tr>
					<td>'.$item["id_grupo"].'</td>
					<td>'.$item["nombre"].'</td>
					<td><a href="index.php?action=editarGrupo&id='.$item["id_grupo"].'"><button class="botonE">Editar</button></a> <a href="index.php?action=verGrupos&idBorrar='.$item["id_grupo"].'"><button class="botonB">Borrar</button></a></td>
				</tr>';
			}
		}

		//método que imprime la formulario del grupo con sus respectivos datos
		public function editarGrupoController(){
			$datosController = $_GET["id"]; //se obtiene el id del grupo a editar
			$respuesta = Datos::editarGrupoModel($datosController, "grupo"); //se obtienen los campos de ese registro

			//se imprime el formulario con los campos llenos de acuerdo al id del grupo
			echo'<input type="hidden" value="'.$respuesta["id_grupo"].'" name="idEditarGrupo">

			 <div class="form-group">
                <label>Nombre: </label>
			    <input type="text" class="form-control" value="'.$respuesta["nombre"].'" name="nombreEditar" required>
			 </div>

			 <div class="box-footer">
			 <input type="submit" value="Actualizar" class="button">
			 </div>';

		}

		//este método obtiene los datos del formulario de editar y los manda al método que es el encargo de hacer el update en la base de datos
		public function actualizarGrupoController(){
			if(isset($_POST["idEditarGrupo"])){
				//se guardan los datos en un arreglo asociativo
				$datosController = array( "id"=>$_POST["idEditarGrupo"],
										  "nombre"=>$_POST["nombreEditar"]);
			
				//se manda el arreglo al método que realizará el update en la tabla correspondiente
				$respuesta = Datos::actualizarGrupoModel($datosController, "grupo");

				//si todo salió bien, se redirecciona a la página principal de los grupos
				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=verGrupos';</script>";
				}else{
					//si no, se manda un alerta al usuario
					echo "<script>alert('Algo salio mal');</script>";
				}
			}
		}

		//método que se ejecuta cuando se quiere borrar un grupo
		public function borrarGruposController(){
			if(isset($_GET["idBorrar"])){
				$datosController = $_GET["idBorrar"]; //se obtiene el id del grupo a eliminar
				//este dato junto con la tabla se manda al método del modelo encargo en hacer el DELETE
				$respuesta = Datos::borrarGruposModel($datosController, "grupo");

				//si todo fue exitoso se redirecciona a la página principal de los grupos
				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=verGrupos';</script>";
				}

			}
		}

		//------------------------------------ALUMNAS---------------------------------------
		//agregar una nueva alumna
		public function addAlumnaController(){
			if(isset($_POST["alumnaNombre"])){
				//los datos traídos por el método POST se guardan en un arreglo asociativo
				$datosController = array( "nombre"=>$_POST["alumnaNombre"],
										  "apellido"=>$_POST["alumnaApellido"],
										  "grupo"=>$_POST["alumnaGrupo"],
										  "fecha"=>$_POST["fechaNacimiento"]);

				//se envían los datos al método encargado de hacer la inserción en la base de datos
				$respuesta = Datos::addNewAlumna($datosController, "alumnas");

				//si todo fue correcto se redirecciona a la página principal de alumnas
				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=verAlumnas';</script>";
				}else{
					//si no, se envía un alert
					echo "<script>alert('Ha ocurrido un error');</script>";
				}
			}
		}

		//este método hace la petición al modelo de traer todos los grupos registrados en la base de datos
		public function listarGruposController(){
			$respuesta = Datos::listarGruposModel();
			return $respuesta;
		}

		//este método hace la petición al modelo de traer a todas las alumnas que pertenecen a un grupo determinado
		public function listarAlumnasController($id){
			$respuesta = Datos::listarGrupoAlumnasModel($id);
			return $respuesta;
		}

		//este método es el encargado de imprimir las filas de la tabla de Alumnas con sus respectivos campos
		public function vistaAlumnasController(){
			$respuesta = Datos::vistaAlumnasModel("alumnas");
			foreach($respuesta as $row => $item){
				$grupo = Datos::nombreGrupo($item["id_grupo"]); //de acuerdo al id del grupo, se obtiene el nombre relacionado a este id
				echo'<tr>
					<td>'.$item["id_alumna"].'</td>
					<td>'.$item["nombre"].'</td>
					<td>'.$item["apellido"].'</td>
					<td>'.$item["fecha_nacimiento"].'</td>
					<td>'.$grupo[1].'</td>
					<td><a href="index.php?action=editarAlumna&id='.$item["id_alumna"].'"><button class="botonE">Editar</button></a> <a href="index.php?action=verAlumnas&idBorrar='.$item["id_alumna"].'"><button class="botonB">Borrar</button></a></td>
				</tr>';
			}
		}

		//este método es el encargo de imprimir el formulario con las campos llenos de acuerdo al registro que se vaya a editar	
		public function editarAlumnaController(){
			$datosController = $_GET["id"]; //se obtiene el id del registro a editar
			$respuesta = Datos::editarAlumnaModel($datosController, "alumnas"); //se obtienen los datos de este registro de acuerdo a lo que retorne el modelo
			if($respuesta["id_grupo"]==NULL){
				$allGrupos = Datos::listarGruposModel(); //si la alumna no cuenta con grupo se listan todos
			}else{
				$grupo = Datos::nombreGrupo($respuesta["id_grupo"]); //si la alumna ya tiene un grupo asignado se obtiene el nombre de ese grupo y se pone en la primera posición del select
				$allGrupos = Datos::todosMenosUno($respuesta["id_grupo"]); //después se listan todos los demás grupos excluyendo el grupo al que pertenece actualmente esa alumna
			}


			echo'<input type="hidden" value="'.$respuesta["id_alumna"].'" name="idAlumna">

			 <div class="form-group">
                <label>Nombre: </label>
			    <input type="text" class="form-control" value="'.$respuesta["nombre"].'" name="nombreEditar" required>
			 </div>

			 <div class="form-group">
                <label>Apellido: </label>
			    <input type="text" class="form-control" value="'.$respuesta["apellido"].'" name="apellidoEditar" required>
			 </div>

			 <div class="form-group">
                <label>Fecha de nacimiento: </label>
			    <input type="date" class="form-control" value="'.$respuesta["fecha_nacimiento"].'" name="fechaEditar" required>
			 </div>
			 <div class="form-group">
			 <label>Grupo: </label>
            	<select name="grupoEditar">
            	    <option value="'.$grupo[0].'">'.$grupo[1].'</option>';
              		foreach($allGrupos as $group):
              		echo '<option value="'.$group["id_grupo"].'">'.$group["nombre"].'</option>';
              		endforeach;
            	echo '</select>
        	 </div>

			 <div class="box-footer">
			 <input type="submit" value="Actualizar" class="button">
			 </div>';

		}

		//este método obtiene los datos del forumlario de editar y los manda al método del modelo encargado de realizar el update
		public function actualizarAlumnaController(){
			if(isset($_POST["idAlumna"])){
				//se guardan los valores en un arreglo asociativo
				$datosController = array( "id"=>$_POST["idAlumna"],
										  "nombre"=>$_POST["nombreEditar"],
										  "apellido"=>$_POST["apellidoEditar"],
										  "fecha"=>$_POST["fechaEditar"],
										  "grupo"=>$_POST["grupoEditar"]);
			
				//se mandan los datos al método del modelo encargado de realizar el update
				$respuesta = Datos::actualizarAlumnaModel($datosController, "alumnas");
				//si el update fue exitoso de redirecciona a la página principal de alumnas
				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=verAlumnas';</script>";
				}else{
					//si no, se manda un alert
					echo "<script>alert('Algo salio mal');</script>";
				}
			}
		}

		//método para borrar el registro de una alumna
		public function borrarAlumnasController(){
			if(isset($_GET["idBorrar"])){
				$datosController = $_GET["idBorrar"]; //se obtiene el id de la alumna a borrar
				//se mandan los datos al método del modelo encargado de realizar el DELETE
				$respuesta = Datos::borrarAlumnasModel($datosController, "alumnas");

				//si el delete fue correcto se redirecciona a la página principal de alumnas
				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=verAlumnas';</script>";
				}

			}
		}

		//-------------------------------------PAGOS------------------------------------
		//agrega el registro de un nuevo pago a la base de datos
		public function addPagoController(){
			if(isset($_POST["mama"])){
				$ruta = "views/img/"; //se define la ruta donde se guardará la imagen que se suba
				$ruta2 = $ruta.$_FILES["imagen"]["name"]; //se genera la ruta con el nombre de la imagen
				copy($_FILES["imagen"]["tmp_name"], $ruta2); //se copia el archivo de la imagen a la ruta generada
				$fecha = date("Y-m-d H:i:s"); //se obtiene fecha y hora del sistema
				//se agregan los datos a un arreglo asociativo
				$datosController = array( "grupo"=>$_POST["grupo"],
										  "alumna"=>$_POST["alumna"],
										  "mama"=>$_POST["mama"],
										  "fechaP"=>$_POST["fechaPago"],
										  "imagen"=>$ruta2,
										  "folio"=>$_POST["folio"],
										  "fechaE"=>$fecha);

				//se mandan los datos al método del modelo encargado de realizar la insercción
				$respuesta = Datos::addNewPago($datosController, "pagos");

				//si la insercción fue correcta se redirecciona a la página de lugares
				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=lugares';</script>";
				}else{
					//si no, se muestra un alert
					echo "<script>alert('Ha ocurrido un error');</script>";
				}
			}
		}

		//imprime las filas de la tabla de pagos 
		public function vistaPagosController(){
			$respuesta = Datos::vistaPagosModel("pagos"); //se obtienen todos los registros que se encuentran en la tabla de pagos
			foreach($respuesta as $row => $item){
				$grupo = Datos::nombreGrupo($item["id_grupo"]); //en lugar de poner el id del grupo se pone el nombre
				$alumna = Datos::nombreAlumna($item["id_alumna"]); //igual con la alumna, en lugar de poner el id se pone el nombre
				echo'<tr>
					<td>'.$item["id_pago"].'</td>
					<td>'.$alumna[1].' '.$alumna[2].'</td>
					<td>'.$grupo[1].'</td>
					<td>'.$item["nombre_mama"].'</td>
					<td>'.$item["fecha_pago"].'</td>
					<td>'.$item["fecha_envio"].'</td>
					<td> <a href="'.$item["imagen"].'">Ver</a></td>
					<td>'.$item["folio"].'</td>
					<td><a href="index.php?action=editarPago&id='.$item["id_pago"].'"><button class="botonE">Editar</button></a><a href="index.php?action=verPagos&idBorrar='.$item["id_pago"].'"><button class="botonB">Borrar</button></a></td>
				</tr>';
			}
		}

		//este métod realiza lo mismo que el anterior pero sin algunos campos, como el folio y la imagen
		public function vistaLugaresController(){
			$respuesta = Datos::vistaPagosModel("pagos");
			foreach($respuesta as $row => $item){
				$grupo = Datos::nombreGrupo($item["id_grupo"]);
				$alumna = Datos::nombreAlumna($item["id_alumna"]);
				echo'<tr>
					<td>'.$item["id_pago"].'</td>
					<td>'.$alumna[1].' '.$alumna[2].'</td>
					<td>'.$grupo[1].'</td>
					<td>'.$item["nombre_mama"].'</td>
					<td>'.$item["fecha_pago"].'</td>
					<td>'.$item["fecha_envio"].'</td>
				</tr>';
			}
		}

		//este método imprime el formulario para editar el pago, esto solo lo puede hacer el Admnistrador, se imprimen los campos con los datos correspondientes a ese pago
		public function editarPagoController(){
			$datosController = $_GET["id"];
			$respuesta = Datos::editarPagoModel($datosController, "pagos");
			if($respuesta["id_alumna"]==NULL){
				$allAlumna = Datos::listarAlumnasModel(); //si no hay nada en el id de la alumna se imprimen todas las alumnas
			}else{
				$alumna = Datos::nombreAlumna($respuesta["id_alumna"]); //si hay una alumna asignada a ese pago se muestra en la primera posición del select
				$allAlumna = Datos::todosMenosUnoA($respuesta["id_alumna"]); //y después se muestran todas las demás
				//de igual forma pasa con los grupos
				$grupo = Datos::nombreGrupo($respuesta["id_grupo"]);
				$allGrupos = Datos::todosMenosUno($respuesta["id_grupo"]);
			}


			echo'<input type="hidden" value="'.$respuesta["id_pago"].'" name="idPago">
			
			<div class="form-group">
			 <label>Grupo: </label>
            	<select name="grupoEditar">
            	    <option value="'.$grupo[0].'">'.$grupo[1].'</option>';
              		foreach($allGrupos as $group):
              		echo '<option value="'.$group["id_grupo"].'">'.$group["nombre"].'</option>';
              		endforeach;
            	echo '</select>
        	 </div>

        	 <div class="form-group">
			 <label>Alumna: </label>
            	<select name="alumnaEditar">
            	    <option value="'.$alumna[0].'">'.$alumna[1].' '.$alumna[2].'</option>';
              		foreach($allAlumna as $std):
              		echo '<option value="'.$std["id_alumna"].'">'.$std["nombre"].' '.$std["apellido"].'</option>';
              		endforeach;
            	echo '</select>
        	 </div>

			 <div class="form-group">
                <label>Nombre de la mamá: </label>
			    <input type="text" class="form-control" value="'.$respuesta["nombre_mama"].'" name="mamaEditar" required>
			 </div>

			 <div class="form-group">
                <label>Fecha de pago: </label>
			    <input type="date" class="form-control" value="'.$respuesta["fecha_pago"].'" name="fechaEditar" required>
			 </div>

			 <div class="form-group">
                <label>Imagen: </label>
			    <input type="file" class="form-control" accept="image/*" value="'.$respuesta["imagen"].'" name="imagenEditar" required>
			 </div>

			 <div class="form-group">
                <label>Folio: </label>
			    <input type="text" class="form-control" value="'.$respuesta["folio"].'" name="folioEditar" required>
			 </div>

			 <div class="box-footer">
			 <input type="submit" value="Actualizar" class="button">
			 </div>';

		}

		//se actualiza el pago correspondiente
		public function actualizarPagoController(){
			if(isset($_POST["idPago"])){
				$datosController = array("id"=>$_POST["idPago"],
										  "alumna"=>$_POST["alumnaEditar"],
										  "fecha"=>$_POST["fechaEditar"],
										  "grupo"=>$_POST["grupoEditar"],
										  "mama"=>$_POST["mamaEditar"],
										  "folio"=>$_POST["folioEditar"],
										  "imagen"=>$_POST["imagenEditar"]);
				
				//se ejecuta el método del modelo encargado de realizar el update en la tabla pagos
				$respuesta = Datos::actualizarPagoModel($datosController, "pagos");

				if($respuesta == "success"){
					//se redirecciona a la página principal de pagos
					echo "<script>location.href='index.php?action=verPagos';</script>";
				}else{
					//se manda un alert
					echo "<script>alert('Algo salio mal');</script>";
				}
			}
		}

		//método que hace la petición al modelo para borrar un pago
		public function borrarPagosController(){
			if(isset($_GET["idBorrar"])){
				$datosController = $_GET["idBorrar"]; //se obtiene el id del pago a borrar
				//se manda al método del modelo encargao de hacer el delete
				$respuesta = Datos::borrarPagosModel($datosController, "pagos");

				if($respuesta == "success"){
					//se redirecciona a la página principal de pagos, para que refleje el cambio
					echo "<script>location.href='index.php?action=verPagos';</script>";
				}

			}
		}
	}

?>