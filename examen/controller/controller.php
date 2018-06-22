<?php

	class MvcController{
		public function plantilla(){
			include("views/foundation.php");
		}

		public function enlacesPaginasController(){
			if(isset($_GET["action"])){
				$enlace = $_GET["action"];
			}else{
				$enlace = "inicio";
			}

			$respuesta = EnlacesPaginas::enlacesPaginasModel($enlace);
			include $respuesta;
		}

		public function ingresarController(){
			if(isset($_POST["usuario"])){
				$datosController = array( "usuario"=>$_POST["usuario"],
										  "contra"=>$_POST["contra"]);

				$respuesta = Datos::ingresarModel($datosController, "usuarios");

				if($respuesta["nombre"] == $_POST["usuario"] && $respuesta["contra"] == $_POST["contra"]){
					$_SESSION["nombre"] = $respuesta["nombre"];
					$_SESSION["contra"] = $respuesta["contra"];
					$_SESSION["activo"] = true;
					echo "<script>location.href='index.php?action=verPagos';</script>";
				}else{
					echo "<script>location.href='index.php?action=inicio';</script>";
				}
			}
		}

		//--------------------------------GRUPOS------------------------------------

		public function addGrupoController(){
			if(isset($_POST["grupoNombre"])){
				$datosController = array( "nombre"=>$_POST["grupoNombre"]);

				$respuesta = Datos::addNewGrupo($datosController, "grupo");

				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=verGrupos';</script>";
				}else{
					echo "<script>alert('Ha ocurrido un error');</script>";
				}
			}
		}

		public function vistaGruposController(){
			$respuesta = Datos::vistaGruposModel("grupo");

			foreach($respuesta as $row => $item){
				echo'<tr>
					<td>'.$item["id_grupo"].'</td>
					<td>'.$item["nombre"].'</td>
					<td><a href="index.php?action=editarGrupo&id='.$item["id_grupo"].'"><button class="botonE">Editar</button></a> <a href="index.php?action=verGrupos&idBorrar='.$item["id_grupo"].'"><button class="botonB">Borrar</button></a></td>
				</tr>';
			}
		}

		public function editarGrupoController(){
			$datosController = $_GET["id"];
			$respuesta = Datos::editarGrupoModel($datosController, "grupo");

			echo'<input type="hidden" value="'.$respuesta["id_grupo"].'" name="idEditarGrupo">

			 <div class="form-group">
                <label>Nombre: </label>
			    <input type="text" class="form-control" value="'.$respuesta["nombre"].'" name="nombreEditar" required>
			 </div>

			 <div class="box-footer">
			 <input type="submit" value="Actualizar" class="button">
			 </div>';

		}

		public function actualizarGrupoController(){
			if(isset($_POST["idEditarGrupo"])){
				$datosController = array( "id"=>$_POST["idEditarGrupo"],
										  "nombre"=>$_POST["nombreEditar"]);
			
				$respuesta = Datos::actualizarGrupoModel($datosController, "grupo");

				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=verGrupos';</script>";
				}else{
					echo "<script>alert('Algo salio mal');</script>";
				}
			}
		}
		public function borrarGruposController(){
			if(isset($_GET["idBorrar"])){
				$datosController = $_GET["idBorrar"];
				$respuesta = Datos::borrarGruposModel($datosController, "grupo");

				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=verGrupos';</script>";
				}

			}
		}

		//------------------------------------ALUMNAS---------------------------------------
		public function addAlumnaController(){
			if(isset($_POST["alumnaNombre"])){
				$datosController = array( "nombre"=>$_POST["alumnaNombre"],
										  "apellido"=>$_POST["alumnaApellido"],
										  "grupo"=>$_POST["alumnaGrupo"],
										  "fecha"=>$_POST["fechaNacimiento"]);

				$respuesta = Datos::addNewAlumna($datosController, "alumnas");

				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=verAlumnas';</script>";
				}else{
					echo "<script>alert('Ha ocurrido un error');</script>";
				}
			}
		}

		public function listarGruposController(){
			$respuesta = Datos::listarGruposModel();
			return $respuesta;
		}

		public function listarAlumnasController($id){
			$respuesta = Datos::listarGrupoAlumnasModel($id);
			return $respuesta;
		}

		public function vistaAlumnasController(){
			$respuesta = Datos::vistaAlumnasModel("alumnas");
			foreach($respuesta as $row => $item){
				$grupo = Datos::nombreGrupo($item["id_grupo"]);
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

		public function editarAlumnaController(){
			$datosController = $_GET["id"];
			$respuesta = Datos::editarAlumnaModel($datosController, "alumnas");
			if($respuesta["id_grupo"]==NULL){
				$allGrupos = Datos::listarGruposModel();
			}else{
				$grupo = Datos::nombreGrupo($respuesta["id_grupo"]);
				$allGrupos = Datos::todosMenosUno($respuesta["id_grupo"]);
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

		public function actualizarAlumnaController(){
			if(isset($_POST["idAlumna"])){
				$datosController = array( "id"=>$_POST["idAlumna"],
										  "nombre"=>$_POST["nombreEditar"],
										  "apellido"=>$_POST["apellidoEditar"],
										  "fecha"=>$_POST["fechaEditar"],
										  "grupo"=>$_POST["grupoEditar"]);
			
				$respuesta = Datos::actualizarAlumnaModel($datosController, "alumnas");

				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=verAlumnas';</script>";
				}else{
					echo "<script>alert('Algo salio mal');</script>";
				}
			}
		}
		public function borrarAlumnasController(){
			if(isset($_GET["idBorrar"])){
				$datosController = $_GET["idBorrar"];
				$respuesta = Datos::borrarAlumnasModel($datosController, "alumnas");

				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=verAlumnas';</script>";
				}

			}
		}

		//-----------------------------------PAGOS ADMIN---------------------------------
		public function addPagoController(){
			if(isset($_POST["mama"])){
				$ruta = "views/img/";
				$ruta2 = $ruta.$_FILES["imagen"]["name"];
				copy($_FILES["imagen"]["tmp_name"], $ruta2);
				$fecha = date("Y-m-d H:i:s");
				$datosController = array( "grupo"=>$_POST["grupo"],
										  "alumna"=>$_POST["alumna"],
										  "mama"=>$_POST["mama"],
										  "fechaP"=>$_POST["fechaPago"],
										  "imagen"=>$ruta2,
										  "folio"=>$_POST["folio"],
										  "fechaE"=>$fecha);

				$respuesta = Datos::addNewPago($datosController, "pagos");

				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=lugares';</script>";
				}else{
					echo "<script>alert('Ha ocurrido un error');</script>";
				}
			}
		}

		public function vistaPagosController(){
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
					<td> <a href="'.$item["imagen"].'">Ver</a></td>
					<td>'.$item["folio"].'</td>
					<td><a href="index.php?action=editarPago&id='.$item["id_pago"].'"><button class="botonE">Editar</button></a><a href="index.php?action=verPagos&idBorrar='.$item["id_pago"].'"><button class="botonB">Borrar</button></a></td>
				</tr>';
			}
		}

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

		public function editarPagoController(){
			$datosController = $_GET["id"];
			$respuesta = Datos::editarPagoModel($datosController, "pagos");
			if($respuesta["id_alumna"]==NULL){
				$allAlumna = Datos::listarAlumnasModel();
			}else{
				$alumna = Datos::nombreAlumna($respuesta["id_alumna"]);
				$allAlumna = Datos::todosMenosUnoA($respuesta["id_alumna"]);
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
              		echo '<option value="'.$std["id_aluma"].'">'.$std["nombre"].' '.$std["apellido"].'</option>';
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

		public function actualizarPagoController(){
			if(isset($_POST["idPago"])){
				$fechaE = date("Y-m-d H:i:s");
				$datosController = array("id"=>$_POST["idPago"],
										  "alumna"=>$_POST["alumnaEditar"],
										  "fecha"=>$_POST["fechaEditar"],
										  "grupo"=>$_POST["grupoEditar"],
										  "mama"=>$_POST["mamaEditar"],
										  "folio"=>$_POST["folioEditar"],
										  "fechaE"=>$fechaE,
										  "imagen"=>$_POST["imagenEditar"]);
			
				$respuesta = Datos::actualizarPagoModel($datosController, "pagos");

				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=verPagos';</script>";
				}else{
					echo "<script>alert('Algo salio mal');</script>";
				}
			}
		}
		public function borrarPagosController(){
			if(isset($_GET["idBorrar"])){
				$datosController = $_GET["idBorrar"];
				$respuesta = Datos::borrarPagosModel($datosController, "pagos");

				if($respuesta == "success"){
					echo "<script>location.href='index.php?action=verPagos';</script>";
				}

			}
		}
	}

?>