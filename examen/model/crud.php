<?php
	require_once("conexion.php");

	class Datos extends Conexion{
		public static function ingresarModel($datosModel, $tabla){
			$sql = Conexion::conectar()->prepare("SELECT nombre, contra FROM $tabla WHERE nombre=:nombre AND contra=:contra");	

			$sql->bindParam(":nombre", $datosModel["usuario"], PDO::PARAM_STR);
			$sql->bindParam(":contra", $datosModel["contra"], PDO::PARAM_STR);

			$sql->execute();

			return $sql->fetch();

			$sql->close();
		}

		//-----------------------------------GRUPOS------------------------------------

		public static function addNewGrupo($datosModel, $tabla){
			$sql = Conexion::conectar()->prepare("INSERT INTO $tabla(id_grupo,nombre) VALUES (NULL,:nombre)");	

			$sql->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);

			if($sql->execute()){
				return "success";
			}else{
				return "error";
			}

			$sql->close();
		}

		public static function vistaGruposModel($tabla){

			$stmt = Conexion::conectar()->prepare("SELECT id_grupo, nombre FROM $tabla ORDER BY id_grupo ASC");	
			$stmt->execute(); 
			return $stmt->fetchAll();

			$stmt->close();
		}

		public static function editarGrupoModel($datosModel, $tabla){
			$stmt = Conexion::conectar()->prepare("SELECT id_grupo, nombre FROM $tabla WHERE id_grupo = :id");
			$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);	
			$stmt->execute();

			return $stmt->fetch();

			$stmt->close();
		}

		public static function actualizarGrupoModel($datosModel, $tabla){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre WHERE id_grupo = :id");

			$stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
			$stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);

			if($stmt->execute()){
				return "success";
			}else{
				return "error";
			}

			$stmt->close();

		}

		public static function borrarGruposModel($datosModel, $tabla){
			$stmt1 = Conexion::conectar()->prepare("SELECT id_pago FROM pagos WHERE id_grupo=$datosModel");	
			$stmt1->execute();
			$actualizar = $stmt1->fetch(PDO::FETCH_BOTH);
			if($actualizar){
				foreach ($actualizar as $upd) {
					$stmt2 = Conexion::conectar()->prepare("DELETE FROM pagos WHERE id_pago=$upd[0]");
					$stmt2->execute();
				}
			}

			$stmt3 = Conexion::conectar()->prepare("SELECT id_alumna FROM alumnas WHERE id_grupo=$datosModel");	
			$stmt3->execute();
			$actualizar = $stmt3->fetch(PDO::FETCH_BOTH);
			if($actualizar){
				foreach ($actualizar as $upd) {
					$stmt4 = Conexion::conectar()->prepare("DELETE FROM alumnas WHERE id_alumna=$upd[0]");
					$stmt4->execute();
				}
			}

			$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_grupo = :id");
			$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);

			if($stmt->execute()){
				return "success";
			}else{
				return "error";
			}
			$stmt->close();
		}

		//--------------------------------ALUMNAS------------------------------
		public static function addNewAlumna($datosModel, $tabla){
			$sql = Conexion::conectar()->prepare("INSERT INTO $tabla(id_alumna,nombre,apellido,fecha_nacimiento,id_grupo) VALUES (NULL,:nombre,:apellido,:fecha,:grupo)");	

			$sql->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
			$sql->bindParam(":apellido", $datosModel["apellido"], PDO::PARAM_STR);
			$sql->bindParam(":fecha", $datosModel["fecha"], PDO::PARAM_STR);
			$sql->bindParam(":grupo", $datosModel["grupo"], PDO::PARAM_INT);

			if($sql->execute()){
				return "success";
			}else{
				return "error";
			}

			$sql->close();
		}

		public static function vistaAlumnasModel($tabla){
			$stmt = Conexion::conectar()->prepare("SELECT id_alumna, nombre, apellido, fecha_nacimiento, id_grupo FROM $tabla ORDER BY id_alumna ASC");	
			$stmt->execute(); 
			return $stmt->fetchAll();

			$stmt->close();
		}

		public static function nombreGrupo($id){
			$stmt = Conexion::conectar()->prepare("SELECT id_grupo, nombre FROM grupo WHERE id_grupo=$id");	
			$stmt->execute(); 
			return $stmt->fetch(PDO::FETCH_BOTH);
			$stmt->close();
		}

		public static function listarGruposModel(){
			$stmt = Conexion::conectar()->prepare("SELECT id_grupo, nombre FROM grupo ORDER BY id_grupo ASC");	
			$stmt->execute(); 
			return $stmt->fetchAll();

			$stmt->close();
		}

		public static function todosMenosUno($id){
			$stmt = Conexion::conectar()->prepare("SELECT id_grupo, nombre FROM grupo WHERE id_grupo!=$id ORDER BY id_grupo ASC");	
			$stmt->execute(); 
			return $stmt->fetchAll();

			$stmt->close();
		}

		public static function editarAlumnaModel($datosModel, $tabla){
			$stmt = Conexion::conectar()->prepare("SELECT id_alumna, nombre, apellido, fecha_nacimiento, id_grupo FROM $tabla WHERE id_alumna = :id");
			$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);	
			$stmt->execute();

			return $stmt->fetch();

			$stmt->close();
		}

		public static function actualizarAlumnaModel($datosModel, $tabla){
			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, apellido=:apellido, fecha_nacimiento=:fecha, id_grupo=:grupo WHERE id_alumna=:id");

			$stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
			$stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
			$stmt->bindParam(":apellido", $datosModel["apellido"], PDO::PARAM_STR);
			$stmt->bindParam(":fecha", $datosModel["fecha"], PDO::PARAM_STR);
			$stmt->bindParam(":grupo", $datosModel["grupo"], PDO::PARAM_INT);

			if($stmt->execute()){
				return "success";
			}else{
				return "error";
			}

			$stmt->close();

		}

		public static function borrarAlumnasModel($datosModel, $tabla){
			$stmt1 = Conexion::conectar()->prepare("SELECT id_pago FROM pagos WHERE id_alumna=$datosModel");	
			$stmt1->execute();
			$actualizar = $stmt1->fetch(PDO::FETCH_BOTH);
			if($actualizar){
				foreach ($actualizar as $upd) {
					$stmt2 = Conexion::conectar()->prepare("DELETE FROM pagos WHERE id_pago=$upd[0]");
					$stmt2->execute();
				}
			}

			$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_alumna = :id");
			$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);

			if($stmt->execute()){
				return "success";
			}else{
				return "error";
			}
			$stmt->close();
		}

		//--------------------------------PAGOS------------------------------
		public static function addNewPago($datosModel, $tabla){
			$sql = Conexion::conectar()->prepare("INSERT INTO $tabla(id_pago, id_alumna,id_grupo, nombre_mama, fecha_pago, fecha_envio, imagen, folio) VALUES (NULL,:alumna,:grupo,:mama,:fechaP, :fechaE, :imagen, :folio)");	

			$sql->bindParam(":alumna", $datosModel["alumna"], PDO::PARAM_INT);
			$sql->bindParam(":grupo", $datosModel["grupo"], PDO::PARAM_INT);
			$sql->bindParam(":mama", $datosModel["mama"], PDO::PARAM_STR);
			$sql->bindParam(":fechaP", $datosModel["fechaP"], PDO::PARAM_STR);
			$sql->bindParam(":fechaE", $datosModel["fechaE"], PDO::PARAM_STR);
			$sql->bindParam(":imagen", $datosModel["imagen"], PDO::PARAM_STR);
			$sql->bindParam(":folio", $datosModel["folio"], PDO::PARAM_STR);

			if($sql->execute()){
				return "success";
			}else{
				return "error";
			}

			$sql->close();
		}

		public static function vistaPagosModel($tabla){
			$stmt = Conexion::conectar()->prepare("SELECT id_pago, id_alumna, id_grupo, nombre_mama, fecha_pago, fecha_envio, imagen, folio FROM $tabla ORDER BY id_pago ASC");	
			$stmt->execute(); 
			return $stmt->fetchAll();

			$stmt->close();
		}

		public static function nombreAlumna($id){
			$stmt = Conexion::conectar()->prepare("SELECT id_alumna, nombre, apellido FROM alumnas WHERE id_alumna=$id");	
			$stmt->execute(); 
			return $stmt->fetch(PDO::FETCH_BOTH);
			$stmt->close();
		}

		public static function listarAlumnasModel(){
			$stmt = Conexion::conectar()->prepare("SELECT id_alumna, nombre, apellido FROM alumnas ORDER BY id_alumna ASC");	
			$stmt->execute(); 
			return $stmt->fetchAll();

			$stmt->close();
		}

		public static function listarGrupoAlumnasModel($id){
			$stmt = Conexion::conectar()->prepare("SELECT id_alumna, nombre, apellido FROM alumnas WHERE id_grupo=$id ORDER BY id_alumna ASC");	
			$stmt->execute(); 
			return $stmt->fetchAll();

			$stmt->close();
		}

		public static function todosMenosUnoA($id){
			$stmt = Conexion::conectar()->prepare("SELECT id_alumna, nombre, apellido FROM alumnas WHERE id_alumna!=$id ORDER BY id_alumna ASC");	
			$stmt->execute(); 
			return $stmt->fetchAll();

			$stmt->close();
		}

		public static function editarPagoModel($datosModel, $tabla){
			$stmt = Conexion::conectar()->prepare("SELECT id_pago, id_alumna, id_grupo, nombre_mama, fecha_pago, imagen, folio FROM $tabla WHERE id_pago = :id");
			$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);	
			$stmt->execute();

			return $stmt->fetch();

			$stmt->close();
		}

		public static function actualizarPagoModel($datosModel, $tabla){
			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET id_alumna=:alumna, id_grupo=:grupo, nombre_mama=:mama, fecha_pago=:fecha, fecha_envio=:fechaE, imagen=:imagen, folio=:folio WHERE id_pago=:id");

			$stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
			$stmt->bindParam(":alumna", $datosModel["alumna"], PDO::PARAM_INT);
			$stmt->bindParam(":grupo", $datosModel["grupo"], PDO::PARAM_INT);
			$stmt->bindParam(":mama", $datosModel["mama"], PDO::PARAM_STR);
			$stmt->bindParam(":fecha:", $datosModel["fecha"], PDO::PARAM_STR);
			$stmt->bindParam(":imagen:", $datosModel["imagen"], PDO::PARAM_STR);
			$stmt->bindParam(":folio:", $datosModel["folio"], PDO::PARAM_STR);
			$stmt->bindParam(":fechaE:", $datosModel["fechaE"], PDO::PARAM_STR);

			if($stmt->execute()){
				return "success";
			}else{
				return "error";
			}

			$stmt->close();

		}

		public static function borrarPagosModel($datosModel, $tabla){
			$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_pago = :id");
			$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);

			if($stmt->execute()){
				return "success";
			}else{
				return "error";
			}
			$stmt->close();
		}
	}
?>