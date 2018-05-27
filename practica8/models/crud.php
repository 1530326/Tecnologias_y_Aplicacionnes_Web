<?php
	require_once "conexion.php";

	class Datos extends Conexion{

		public static function ingresarModel($datosModel, $tabla){
			$sql = Conexion::conectar()->prepare("SELECT num_empleado, email, contra FROM $tabla WHERE email=:email AND contra=:contra");	

			$sql->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
			$sql->bindParam(":contra", $datosModel["contra"], PDO::PARAM_STR);

			$sql->execute();

			return $sql->fetch();

			$sql->close();
		}

		public static function addNewCarrera($datosModel, $tabla){
			$sql = Conexion::conectar()->prepare("INSERT INTO $tabla(id,nombre) VALUES (NULL,:nombre)");	

			$sql->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);

			if($sql->execute()){
				return "success";
			}else{
				return "error";
			}

			$sql->close();
		}


		public static function vistaCarrerasModel($tabla){

			$stmt = Conexion::conectar()->prepare("SELECT id, nombre FROM $tabla");	
			$stmt->execute(); 
			return $stmt->fetchAll();

			$stmt->close();

		}

		public static function borrarCarrerasModel($datosModel, $tabla){

			$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
			$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);

			if($stmt->execute()){
				return "success";
			}else{
				return "error";
			}
			$stmt->close();

		}
	
		public static function editarCarreraModel($datosModel, $tabla){

			$stmt = Conexion::conectar()->prepare("SELECT id, nombre FROM $tabla WHERE id = :id");
			$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);	
			$stmt->execute();

			return $stmt->fetch();

			$stmt->close();
		}

		public static function actualizarCarreraModel($datosModel, $tabla){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre WHERE id = :id");

			$stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
			$stmt->bindParam(":nombre", $datosModel["nombreCarrera"], PDO::PARAM_STR);

			if($stmt->execute()){
				return "success";
			}else{
				return "error";
			}

			$stmt->close();

		}

		public static function listarCarrerasModel(){
			$sql = Conexion::conectar()->prepare("SELECT id, nombre FROM carreras");

			$sql->execute();

			return $sql->fetchAll();
		}

		public static function listarAlumnosModel($tutor){
			$sql = Conexion::conectar()->prepare("SELECT matricula, nombre FROM alumnos WHERE tutor=$tutor");

			$sql->execute();

			return $sql->fetchAll();
		}

		public static function listarCarrerasMenosUnaModel($id){
			$sql = Conexion::conectar()->prepare("SELECT id, nombre FROM carreras WHERE id!=$id");

			$sql->execute();

			return $sql->fetchAll();
		}


		public static function listarMaestrosMenosUnoModel($id){
			$sql = Conexion::conectar()->prepare("SELECT num_empleado, nombre FROM maestros WHERE num_empleado!=$id AND num_empleado!='000000'");

			$sql->execute();

			return $sql->fetchAll();
		}

		public static function addNewMaestroModel($datosModel, $tabla){
			$sql = Conexion::conectar()->prepare("INSERT INTO $tabla(num_empleado,carrera,nombre,email,contra) VALUES (:numEmpleado,:carrera,:nombre,:email,:contra)");	

			$sql->bindParam(":numEmpleado", $datosModel["id"], PDO::PARAM_STR);
			$sql->bindParam(":carrera", $datosModel["carrera"], PDO::PARAM_INT);
			$sql->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
			$sql->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
			$sql->bindParam(":contra", $datosModel["contra"], PDO::PARAM_STR);

			if($sql->execute()){
				return "success";
			}else{
				return "error";
			}

			$sql->close();
		}

		public static function vistaMaestrosModel($tabla){

			$stmt = Conexion::conectar()->prepare("SELECT num_empleado, carrera, nombre, email FROM $tabla WHERE num_empleado!='000000'");	
			$stmt->execute(); 
			return $stmt->fetchAll();

			$stmt->close();

		}

		public static function vistaMaestrosCarreraModel($id,$tabla){

			$stmt = Conexion::conectar()->prepare("SELECT nombre FROM $tabla WHERE id=$id");	
			$stmt->execute(); 
			return $stmt->fetch(PDO::FETCH_BOTH);

			$stmt->close();

		}

		public static function vistaMaestroAlumnoModel($id,$tabla){

			$stmt = Conexion::conectar()->prepare("SELECT nombre FROM $tabla WHERE num_empleado=$id AND num_empleado!='000000'");	
			$stmt->execute(); 
			return $stmt->fetch(PDO::FETCH_BOTH);

			$stmt->close();

		}

		public static function borrarMaestrosModel($datosModel, $tabla){

			$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE num_empleado = :num_empleado");
			$stmt->bindParam(":num_empleado", $datosModel, PDO::PARAM_INT);

			if($stmt->execute()){
				return "success";
			}else{
				return "error";
			}
			$stmt->close();

		}


		public static function editarMaestroModel($datosModel, $tabla){

			$stmt = Conexion::conectar()->prepare("SELECT num_empleado, carrera, nombre, email, contra FROM $tabla WHERE num_empleado = :id");
			$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);	
			$stmt->execute();

			return $stmt->fetch();

			$stmt->close();
		}

		public static function actualizarMaestroModel($datosModel, $tabla){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET carrera = :carrera, nombre=:nombre, email=:email, contra=:contra WHERE num_empleado = :id");

			$stmt->bindParam(":id", $datosModel["num_empleado"], PDO::PARAM_STR);
			$stmt->bindParam(":carrera", $datosModel["carrera"], PDO::PARAM_INT);
			$stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
			$stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
			$stmt->bindParam(":contra", $datosModel["contra"], PDO::PARAM_STR);

			if($stmt->execute()){
				return "success";
			}else{
				return "error";
			}

			$stmt->close();

		}

		public static function listarMaestrosModel(){
			$sql = Conexion::conectar()->prepare("SELECT num_empleado, nombre FROM maestros WHERE num_empleado!='000000'");

			$sql->execute();

			return $sql->fetchAll();
		}

		public static function addNewAlumnoModel($datosModel, $tabla){
			$sql = Conexion::conectar()->prepare("INSERT INTO $tabla(matricula,nombre,carrera,tutor) VALUES (:matricula,:nombre,:carrera,:tutor)");	

			$sql->bindParam(":matricula", $datosModel["matricula"], PDO::PARAM_STR);
			$sql->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
			$sql->bindParam(":carrera", $datosModel["carrera"], PDO::PARAM_INT);
			$sql->bindParam(":tutor", $datosModel["tutor"], PDO::PARAM_STR);

			if($sql->execute()){
				return "success";
			}else{
				return "error";
			}

			$sql->close();
		}

		public static function vistaAlumnosModel($tabla){

			$stmt = Conexion::conectar()->prepare("SELECT matricula, nombre, carrera, tutor FROM $tabla");	
			$stmt->execute(); 
			return $stmt->fetchAll();

			$stmt->close();

		}

		public static function borrarAlumnosModel($datosModel, $tabla){

			$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE matricula = :matricula");
			$stmt->bindParam(":matricula", $datosModel, PDO::PARAM_INT);

			if($stmt->execute()){
				return "success";
			}else{
				return "error";
			}
			$stmt->close();

		}

		public static function editarAlumnosModel($datosModel, $tabla){

			$stmt = Conexion::conectar()->prepare("SELECT matricula, nombre, carrera, tutor FROM $tabla WHERE matricula = :id");
			$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);	
			$stmt->execute();

			return $stmt->fetch();

			$stmt->close();
		}

		public static function actualizarAlumnoModel($datosModel, $tabla){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre=:nombre, carrera = :carrera, tutor=:tutor WHERE matricula = :id");

			$stmt->bindParam(":id", $datosModel["matricula"], PDO::PARAM_STR);
			$stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
			$stmt->bindParam(":carrera", $datosModel["carrera"], PDO::PARAM_INT);
			$stmt->bindParam(":tutor", $datosModel["tutor"], PDO::PARAM_STR);

			if($stmt->execute()){
				return "success";
			}else{
				return "error";
			}

			$stmt->close();

		}

		public static function vistaTutoriasModel($tabla,$maestro){

			$stmt = Conexion::conectar()->prepare("SELECT id, fecha, hora, temas FROM $tabla WHERE tutor=$maestro");	
			$stmt->execute(); 
			return $stmt->fetchAll();

			$stmt->close();

		}

		public static function borrarTutoriasModel($datosModel, $tabla1, $tabla2){

			$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla1 WHERE id_tutoria = :tutoria");
			$stmt->bindParam(":tutoria", $datosModel, PDO::PARAM_INT);

			$stmt->execute();

			$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla2 WHERE id = :tutoria");
			$stmt->bindParam(":tutoria", $datosModel, PDO::PARAM_INT);

			if($stmt->execute()){
				return "success";
			}else{
				return "error";
			}
			$stmt->close();

		}

		public static function idTutoriaModel(){
			$stmt = Conexion::conectar()->prepare("SELECT id FROM tutoria ORDER BY id DESC LIMIT 1");	
			$stmt->execute(); 
			return $stmt->fetch(PDO::FETCH_BOTH);

			$stmt->close();
		}

		public static function addNewTutoriaModel($datosModel, $tabla1, $tabla2){
			$sql = Conexion::conectar()->prepare("INSERT INTO $tabla1(id,tutor,fecha,hora,temas) VALUES (NULL,:tutor,:fecha,:hora,:temas)");	

			$sql->bindParam(":tutor", $datosModel["tutor"], PDO::PARAM_STR);
			$sql->bindParam(":fecha", $datosModel["fecha"], PDO::PARAM_STR);
			$sql->bindParam(":hora", $datosModel["hora"], PDO::PARAM_STR);
			$sql->bindParam(":temas", $datosModel["temas"], PDO::PARAM_STR);

			$sql->execute();

			$res = Datos::idTutoriaModel();

			if($datosModel["tipo"]=="Grupal"){
				$respuesta = Datos::listarAlumnosModel($datosModel["tutor"]);

				foreach($respuesta as $al){
					$sql = Conexion::conectar()->prepare("INSERT INTO $tabla2(id,id_tutoria,alumno,tipo) VALUES (NULL,:tutoria,:alumno,:tipo)");	

					$sql->bindParam(":tutoria", $res[0], PDO::PARAM_STR);
					$sql->bindParam(":alumno", $al["matricula"], PDO::PARAM_STR);
					$sql->bindParam(":tipo", $datosModel["tipo"], PDO::PARAM_STR);

					$r = $sql->execute();
				}
			}else{
				$sql = Conexion::conectar()->prepare("INSERT INTO $tabla2(id,id_tutoria,alumno,tipo) VALUES (NULL,:tutoria,:alumno,:tipo)");	

					$sql->bindParam(":tutoria", $res[0], PDO::PARAM_STR);
					$sql->bindParam(":alumno", $datosModel["alumno"], PDO::PARAM_STR);
					$sql->bindParam(":tipo", $datosModel["tipo"], PDO::PARAM_STR);

				$r = $sql->execute();
			}

			if($r){
				return "success";
			}else{
				return "error";
			}

			$sql->close();
		}

		public static function editarTutoriasModel($datosModel, $tabla){

			$stmt = Conexion::conectar()->prepare("SELECT id, fecha, hora, temas FROM $tabla WHERE id = :id");
			$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);	
			$stmt->execute();

			return $stmt->fetch();

			$stmt->close();
		}

		public static function actualizarTutoriasModel($datosModel, $tabla){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET fecha=:fecha, hora = :hora, temas=:temas WHERE id = :id");

			$stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_STR);
			$stmt->bindParam(":fecha", $datosModel["fecha"], PDO::PARAM_STR);
			$stmt->bindParam(":hora", $datosModel["hora"], PDO::PARAM_INT);
			$stmt->bindParam(":temas", $datosModel["temas"], PDO::PARAM_STR);

			if($stmt->execute()){
				return "success";
			}else{
				return "error";
			}

			$stmt->close();

		}
	}
?>