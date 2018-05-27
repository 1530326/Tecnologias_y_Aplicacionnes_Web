<?php
	
	class MvcController{

		public function plantilla(){
			include("views/foundation.php");
		}

		public function enlacesPaginasController(){
			if(isset( $_GET['action'])){
			
				$enlaces = $_GET['action'];
		
			}else{

				$enlaces = "index";
			}

			$respuesta = EnlacesPaginas::enlacesPaginasModel($enlaces);

			include $respuesta;
		}

		public function ingresarController(){
			if(isset($_POST["emailLogin"])){
				$datosController = array( "email"=>$_POST["emailLogin"],
										  "contra"=>$_POST["passLogin"]);

				$respuesta = Datos::ingresarModel($datosController, "maestros");

				if($respuesta["email"] == $_POST["emailLogin"] && $respuesta["contra"] == $_POST["passLogin"]){
					session_start();
					if($_POST["emailLogin"]!="admin@admin.com"){
						$_SESSION["tipo"] = "maestro";
						$_SESSION["id"] = $respuesta["num_empleado"];
						header("location:index.php?action=okM");
					}else{
						$_SESSION["tipo"] = "admin";
						header("location:index.php?action=okA");
					}
				}else{
					header("location:index.php");
				}
			}
		}

		public function addCarreraController(){
			if(isset($_POST["carreraNombre"])){
				$datosController = array( "nombre"=>$_POST["carreraNombre"]);

				$respuesta = Datos::addNewCarrera($datosController, "carreras");

				if($respuesta == "success"){
					//header("location:index.php?action=mostrarCarreras");
					echo "<script>alert('Carrera registrada');</script>";
				}else{
					echo "<script>alert('Ha ocurrido un error');</script>";
				}
			}
		}

		public function vistaCarrerasController(){

			$respuesta = Datos::vistaCarrerasModel("carreras");

			foreach($respuesta as $row => $item){
				echo'<tr>
					<td>'.$item["id"].'</td>
					<td>'.$item["nombre"].'</td>
					<td><a href="index.php?action=editarCarreras&id='.$item["id"].'" class="botonModificar">Editar</a> <a href="index.php?action=mostrarCarreras&idBorrar='.$item["id"].'" class="botonEliminar">Borrar</a></td>
				</tr>';
			}

		}

		public function borrarCarrerasController(){

			if(isset($_GET["idBorrar"])){
				$datosController = $_GET["idBorrar"];
				$respuesta = Datos::borrarCarrerasModel($datosController, "carreras");

				if($respuesta == "success"){
					echo "<script>alert('Carrera borrada');</script>";
				}

			}
		}

		public function editarCarrerasController(){
			$datosController = $_GET["id"];
			$respuesta = Datos::editarCarreraModel($datosController, "carreras");

			echo'<input type="hidden" value="'.$respuesta["id"].'" name="idEditarCarrera">

			 <input type="text" value="'.$respuesta["nombre"].'" name="carreraEditar" required>

			 <input type="submit" value="Actualizar" class="button">';

		}

		public function actualizarCarrerasController(){
			if(isset($_POST["carreraEditar"])){
				$datosController = array( "id"=>$_POST["idEditarCarrera"],
							          "nombreCarrera"=>$_POST["carreraEditar"]);
			
				$respuesta = Datos::actualizarCarreraModel($datosController, "carreras");

				if($respuesta == "success"){
					echo "<script>alert('Carrera actualizada');</script>";
				}else{
					echo "<script>alert('Algo salio mal');</script>";
				}
			}
		}

		public function listarCarreras(){
			return $respuesta = Datos::listarCarrerasModel();
		}

		public function listarAlumnos(){
			return $respuesta = Datos::listarAlumnosModel($_SESSION["id"]);
		}

		public function addMaestroController(){
			if(isset($_POST["maestroNumEmpleado"])){
				$datosController = array( "id"=>$_POST["maestroNumEmpleado"],
										  "carrera"=>$_POST["maestroCarrera"],
										  "nombre"=>$_POST["maestroNombre"],
										  "email"=>$_POST["maestroEmail"],
										  "contra"=>$_POST["maestroPassword"]);

				$respuesta = Datos::addNewMaestroModel($datosController, "maestros");

				if($respuesta == "success"){
					//header("location:index.php?action=mostrarCarreras");
					echo "<script>alert('Maestro registrado');</script>";
				}else{
					echo "<script>alert('Ha ocurrido un error');</script>";
				}
			}
		}

		public function vistaMaestrosController(){

			$respuesta = Datos::vistaMaestrosModel("maestros");

			foreach($respuesta as $row => $item){
				$carrera = Datos::vistaMaestrosCarreraModel($item["carrera"],"carreras");
				echo'<tr>
					<td>'.$item["num_empleado"].'</td>
					<td>'.$carrera[0].'</td>
					<td>'.$item["nombre"].'</td>
					<td>'.$item["email"].'</td>
					<td><a href="index.php?action=editarMaestros&id='.$item["num_empleado"].'" class="botonModificar">Editar</a> <a href="index.php?action=mostrarMaestros&idBorrar='.$item["num_empleado"].'" class="botonEliminar">Borrar</a></td>
				</tr>';
			}

		}

		public function vistaMaestros2Controller(){

			$respuesta = Datos::vistaMaestrosModel("maestros");

			foreach($respuesta as $row => $item){
				$carrera = Datos::vistaMaestrosCarreraModel($item["carrera"],"carreras");
				echo'<tr>
					<td>'.$item["num_empleado"].'</td>
					<td>'.$carrera[0].'</td>
					<td>'.$item["nombre"].'</td>
					<td>'.$item["email"].'</td>
				</tr>';
			}

		}

		public function borrarMaestrosController(){

			if(isset($_GET["idBorrar"])){
				$datosController = $_GET["idBorrar"];
				$respuesta = Datos::borrarMaestrosModel($datosController, "maestros");

				if($respuesta == "success"){
					echo "<script>alert('Maestro borrado');</script>";
				}

			}
		}

		public function editarMaestrosController(){
			$datosController = $_GET["id"];
			$respuesta = Datos::editarMaestroModel($datosController, "maestros");
			$carrera = Datos::vistaMaestrosCarreraModel($respuesta["carrera"],"carreras");
			$allCarreras = Datos::listarCarrerasMenosUnaModel($respuesta["carrera"]);

			echo'<input type="hidden" value="'.$respuesta["num_empleado"].'" name="idEditarEmpleado">
			<select name="carreraEditar">
				<option value="'.$respuesta["carrera"].'">'.$carrera[0].'</option>';
				foreach($allCarreras as $carrs):
					echo '<option value="'.$carrs["id"].'">'.$carrs["nombre"].'</option>';
				endforeach;
			echo '</select>

			 <input type="text" value="'.$respuesta["nombre"].'" name="nombreEditar" required>
			 <input type="email" value="'.$respuesta["email"].'" name="emailEditar" required>
			 <input type="password" value="'.$respuesta["contra"].'" name="contraEditar" required>

			 <input type="submit" value="Actualizar" class="button">';

		}

		public function actualizarMaestrosController(){
			if(isset($_POST["idEditarEmpleado"])){
			$datosController = array( "num_empleado"=>$_POST["idEditarEmpleado"],
							          "carrera"=>$_POST["carreraEditar"],
							      	  "nombre"=>$_POST["nombreEditar"],
							      	  "email"=>$_POST["emailEditar"],
							      	  "contra"=>$_POST["contraEditar"]);
			
				$respuesta = Datos::actualizarMaestroModel($datosController, "maestros");

				if($respuesta == "success"){
					echo "<script>alert('Maestro actualizado');</script>";
				}else{
					echo "<script>alert('Algo salio mal');</script>";
				}
			}
		}

		public function listarMaestros(){
			return $respuesta = Datos::listarMaestrosModel();
		}

		public function addAlumnoController(){
			if(isset($_POST["alumnoMatricula"])){
				$datosController = array( "matricula"=>$_POST["alumnoMatricula"],
										  "nombre"=>$_POST["alumnoNombre"],
										  "carrera"=>$_POST["alumnoCarrera"],
										  "tutor"=>$_POST["alumnoTutor"]);

				$respuesta = Datos::addNewAlumnoModel($datosController, "alumnos");

				if($respuesta == "success"){
					//header("location:index.php?action=mostrarCarreras");
					echo "<script>alert('Alumno registrado');</script>";
				}else{
					echo "<script>alert('Ha ocurrido un error');</script>";
				}
			}
		}

		public function vistaAlumnosController(){

			$respuesta = Datos::vistaAlumnosModel("alumnos");

			foreach($respuesta as $row => $item){
				$carrera = Datos::vistaMaestrosCarreraModel($item["carrera"],"carreras");
				$tutor = Datos::vistaMaestroAlumnoModel($item["tutor"],"maestros");
				echo'<tr>
					<td>'.$item["matricula"].'</td>
					<td>'.$item["nombre"].'</td>
					<td>'.$carrera[0].'</td>
					<td>'.$tutor[0].'</td>
					<td><a href="index.php?action=editarAlumnos&id='.$item["matricula"].'" class="botonModificar">Editar</a> <a href="index.php?action=mostrarAlumno&idBorrar='.$item["matricula"].'" class="botonEliminar">Borrar</a></td>
				</tr>';
			}

		}

		public function vistaAlumnos2Controller(){

			$respuesta = Datos::vistaAlumnosModel("alumnos");

			foreach($respuesta as $row => $item){
				$carrera = Datos::vistaMaestrosCarreraModel($item["carrera"],"carreras");
				$tutor = Datos::vistaMaestroAlumnoModel($item["tutor"],"maestros");
				echo'<tr>
					<td>'.$item["matricula"].'</td>
					<td>'.$item["nombre"].'</td>
					<td>'.$carrera[0].'</td>
					<td>'.$tutor[0].'</td>
				</tr>';
			}

		}


		public function borrarAlumnosController(){

			if(isset($_GET["idBorrar"])){
				$datosController = $_GET["idBorrar"];
				$respuesta = Datos::borrarAlumnosModel($datosController, "alumnos");

				if($respuesta == "success"){
					echo "<script>alert('Alumno borrado');</script>";
				}

			}
		}

		public function editarAlumnosController(){
			$datosController = $_GET["id"];
			$respuesta = Datos::editarAlumnosModel($datosController, "alumnos");
			$carrera = Datos::vistaMaestrosCarreraModel($respuesta["carrera"],"carreras");
			$maestro = Datos::vistaMaestroAlumnoModel($respuesta["tutor"],"maestros");
			$allCarreras = Datos::listarCarrerasMenosUnaModel($respuesta["carrera"]);
			$allMaestros = Datos::listarMaestrosMenosUnoModel($respuesta["tutor"]);

			echo'<input type="hidden" value="'.$respuesta["matricula"].'" name="matriculaEditar">
			<input type="text" value="'.$respuesta["nombre"].'" name="nombreEditar" required>
			<select name="carreraEditar">
				<option value="'.$respuesta["carrera"].'">'.$carrera[0].'</option>';
				foreach($allCarreras as $carrs):
					echo '<option value="'.$carrs["id"].'">'.$carrs["nombre"].'</option>';
				endforeach;
			echo '</select>

			<select name="tutorEditar">
				<option value="'.$respuesta["tutor"].'">'.$maestro[0].'</option>';
				foreach($allMaestros as $mtr):
					echo '<option value="'.$mtr["num_empleado"].'">'.$mtr["nombre"].'</option>';
				endforeach;
			echo '<input type="submit" value="Actualizar" class="button">';

		}

		public function actualizarAlumnosController(){
			if(isset($_POST["matriculaEditar"])){
			$datosController = array( "matricula"=>$_POST["matriculaEditar"],
							          "nombre"=>$_POST["nombreEditar"],
							      	  "carrera"=>$_POST["carreraEditar"],
							      	  "tutor"=>$_POST["tutorEditar"]);
			
				$respuesta = Datos::actualizarAlumnoModel($datosController, "alumnos");

				if($respuesta == "success"){
					echo "<script>alert('Alumno actualizado');</script>";
				}else{
					echo "<script>alert('Algo salio mal');</script>";
				}
			}
		}

		public function vistaTutoriasController(){

			$respuesta = Datos::vistaTutoriasModel("tutoria",$_SESSION["id"]);

			foreach($respuesta as $row => $item){
				echo'<tr>
					<td>'.$item["id"].'</td>
					<td>'.$item["fecha"].'</td>
					<td>'.$item["hora"].'</td>
					<td>'.$item["temas"].'</td>
					<td><a href="index.php?action=editarTutoria&id='.$item["id"].'" class="botonModificar">Editar</a> <a href="index.php?action=mostrarTutorias&idBorrar='.$item["id"].'" class="botonEliminar">Borrar</a></td>
				</tr>';
			}

		}

		public function vistaTutorias2Controller(){

			$respuesta = Datos::vistaTutoriasModel("tutoria",$_SESSION["id"]);

			foreach($respuesta as $row => $item){
				echo'<tr>
					<td>'.$item["id"].'</td>
					<td>'.$item["fecha"].'</td>
					<td>'.$item["hora"].'</td>
					<td>'.$item["temas"].'</td>
				</tr>';
			}

		}


		public function borrarTutoriasController(){

			if(isset($_GET["idBorrar"])){
				$datosController = $_GET["idBorrar"];
				$respuesta = Datos::borrarTutoriasModel($datosController,"alumno_tutoria", "tutoria");

				if($respuesta == "success"){
					echo "<script>alert('Tutoría borrada');</script>";
				}

			}
		}

		public function addTutoriaController(){
			if(isset($_POST["tutoriaFecha"])){
				if($_POST["tutoriaTipo"]=="Individual"){
					$datosController = array( "fecha"=>$_POST["tutoriaFecha"],
										  "hora"=>$_POST["tutoriaHora"],
										  "temas"=>$_POST["tutoriaTema"],
										  "tutor"=>$_SESSION["id"],
										  "alumno"=>$_POST["tutoriaAlumno"],
										  "tipo"=>$_POST["tutoriaTipo"]);
				}else{
					$datosController = array( "fecha"=>$_POST["tutoriaFecha"],
										  "hora"=>$_POST["tutoriaHora"],
										  "temas"=>$_POST["tutoriaTema"],
										  "tutor"=>$_SESSION["id"],
										  "tipo"=>$_POST["tutoriaTipo"]);
				}
				

				$respuesta = Datos::addNewTutoriaModel($datosController, "tutoria", "alumno_tutoria");

				if($respuesta == "success"){
					//header("location:index.php?action=mostrarCarreras");
					echo "<script>alert('Tutoría registrado');</script>";
				}else{
					echo "<script>alert('Ha ocurrido un error');</script>";
				}
			}
		}

		public function editarTutoriasController(){
			$datosController = $_GET["id"];
			$respuesta = Datos::editarTutoriasModel($datosController, "tutoria");
			echo'<input type="hidden" value="'.$respuesta["id"].'" name="tutoriaEditar">
			<input type="text" value="'.$respuesta["fecha"].'" name="fechaEditar">
			<input type="text" value="'.$respuesta["hora"].'" name="horaEditar">
			<input type="text" value="'.$respuesta["temas"].'" name="temasEditar">
			<input type="submit" value="Actualizar" class="button">';

		}

		public function actualizarTutoriasController(){
			if(isset($_POST["tutoriaEditar"])){
			$datosController = array( "id"=>$_POST["tutoriaEditar"],
							          "fecha"=>$_POST["fechaEditar"],
							      	  "hora"=>$_POST["horaEditar"],
							      	  "temas"=>$_POST["temasEditar"]);
			
				$respuesta = Datos::actualizarTutoriasModel($datosController, "tutoria");

				if($respuesta == "success"){
					echo "<script>alert('Tutoría actualizada');</script>";
				}else{
					echo "<script>alert('Algo salio mal');</script>";
				}
			}
		}
	}
?>
