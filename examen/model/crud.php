<?php
	//se requiere del archivo conexión para realizar las transaccions y peticiones a la base de datos
	require_once("conexion.php");

	class Datos extends Conexion{
		//este método retorna los valores de los campos nombre y contra si encuentra un registro con los que estos valores coincidan con los mandados por el controlador
		public static function ingresarModel($datosModel, $tabla){
			$sql = Conexion::conectar()->prepare("SELECT nombre, contra FROM $tabla WHERE nombre=:nombre AND contra=:contra");	

			$sql->bindParam(":nombre", $datosModel["usuario"], PDO::PARAM_STR);
			$sql->bindParam(":contra", $datosModel["contra"], PDO::PARAM_STR);

			$sql->execute();

			return $sql->fetch();

			$sql->close();
		}

		//-----------------------------------GRUPOS------------------------------------
		//este métod realiza la inserción de un nuevo grupo a la base de datos
		public static function addNewGrupo($datosModel, $tabla){
			//se genera la consulta, en este caso la inserción
			$sql = Conexion::conectar()->prepare("INSERT INTO $tabla(id_grupo,nombre) VALUES (NULL,:nombre)");	

			//se ligan los valores traídos por el controlador con las varibles de la consulta
			$sql->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);

			//se ejecuta la inserción y si es exitosa se retorna el success y sino, un error
			if($sql->execute()){
				return "success";
			}else{
				return "error";
			}

			$sql->close();
		}

		//este método retorna todos los registros que se encuentran en la tabla grupo y si ordena de acuerdo al id por si se llegan a mostrar en desorden
		public static function vistaGruposModel($tabla){
			$stmt = Conexion::conectar()->prepare("SELECT id_grupo, nombre FROM $tabla ORDER BY id_grupo ASC");	
			$stmt->execute(); 
			return $stmt->fetchAll();

			$stmt->close();
		}

		//obtiene los datos de un grupo de acuerdo al id que se le fue enviado
		public static function editarGrupoModel($datosModel, $tabla){
			$stmt = Conexion::conectar()->prepare("SELECT id_grupo, nombre FROM $tabla WHERE id_grupo = :id");
			$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);	
			$stmt->execute();

			return $stmt->fetch();

			$stmt->close();
		}

		//realiza el update de un grupo
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

		//método para borrar un grupo
		public static function borrarGruposModel($datosModel, $tabla){
			//se obtienen los id de pago que están relacionados al id de grupo que se quiere eliminar
			$stmt1 = Conexion::conectar()->prepare("SELECT id_pago FROM pagos WHERE id_grupo=$datosModel");	
			$stmt1->execute();
			$actualizar = $stmt1->fetch(PDO::FETCH_BOTH);
			if($actualizar){
				foreach ($actualizar as $upd) {
					//se eliminan los registros de la tabla pagos que estaban relacionados al grupo que se quiere eliminar
					$stmt2 = Conexion::conectar()->prepare("DELETE FROM pagos WHERE id_pago=$upd[0]");
					$stmt2->execute();
				}
			}

			//se obtienen los id de las alumnas que se encuentran relacionados con el id del grupo a eliminar
			$stmt3 = Conexion::conectar()->prepare("SELECT id_alumna FROM alumnas WHERE id_grupo=$datosModel");	
			$stmt3->execute();
			$actualizar = $stmt3->fetch(PDO::FETCH_BOTH);
			if($actualizar){
				foreach ($actualizar as $upd) {
					//se eliminan los registros de la tablas alumnas que se encontraban relacionados con el id del grupo
					$stmt4 = Conexion::conectar()->prepare("DELETE FROM alumnas WHERE id_alumna=$upd[0]");
					$stmt4->execute();
				}
			}

			//se prepara la sentencia para eliminar el grupo
			$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_grupo = :id");
			$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);

			//se ejecuta la sentencia
			if($stmt->execute()){
				return "success"; //si fue exitoso se retorna un successs
			}else{
				return "error"; //sino, un error
			}
			$stmt->close();
		}

		//--------------------------------ALUMNAS------------------------------
		//agrega un nuevo registro a la tabla alumnas
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

		//retorna todos los registros que se encuentran en la tabla alumnas por orden ascendente de acuerdo al id
		public static function vistaAlumnasModel($tabla){
			$stmt = Conexion::conectar()->prepare("SELECT id_alumna, nombre, apellido, fecha_nacimiento, id_grupo FROM $tabla ORDER BY id_alumna ASC");	
			$stmt->execute(); 
			return $stmt->fetchAll();

			$stmt->close();
		}

		//se obtiene el nombre de un grupo de acuerdo al id
		public static function nombreGrupo($id){
			$stmt = Conexion::conectar()->prepare("SELECT id_grupo, nombre FROM grupo WHERE id_grupo=$id");	
			$stmt->execute(); 
			return $stmt->fetch(PDO::FETCH_BOTH);
			$stmt->close();
		}

		//se listan todos los registros de la tabla grupos
		public static function listarGruposModel(){
			$stmt = Conexion::conectar()->prepare("SELECT id_grupo, nombre FROM grupo ORDER BY id_grupo ASC");	
			$stmt->execute(); 
			return $stmt->fetchAll();

			$stmt->close();
		}

		//se listan todos los grupos menos el que ya tiene el registro
		public static function todosMenosUno($id){
			$stmt = Conexion::conectar()->prepare("SELECT id_grupo, nombre FROM grupo WHERE id_grupo!=$id ORDER BY id_grupo ASC");	
			$stmt->execute(); 
			return $stmt->fetchAll();

			$stmt->close();
		}

		//método que retorna los datos del registro que fue solicitado
		public static function editarAlumnaModel($datosModel, $tabla){
			$stmt = Conexion::conectar()->prepare("SELECT id_alumna, nombre, apellido, fecha_nacimiento, id_grupo FROM $tabla WHERE id_alumna = :id");
			$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);	
			$stmt->execute();

			return $stmt->fetch();

			$stmt->close();
		}

		//este método realiza el update del registro que fue solicitado
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

		//método que se encarga de borrar a una alumna
		public static function borrarAlumnasModel($datosModel, $tabla){
			//se obtienen los id de los pagos que se encuentran relacionados con la alumna que se quiere borrar
			$stmt1 = Conexion::conectar()->prepare("SELECT id_pago FROM pagos WHERE id_alumna=$datosModel");	
			$stmt1->execute();
			$actualizar = $stmt1->fetch(PDO::FETCH_BOTH);
			if($actualizar){
				foreach ($actualizar as $upd) {
					//se borran los pagos relacionados con la alumna
					$stmt2 = Conexion::conectar()->prepare("DELETE FROM pagos WHERE id_pago=$upd[0]");
					$stmt2->execute();
				}
			}

			//se prepara el delete de la alumna
			$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_alumna = :id");
			$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);

			//se ejecuta la sentencia y se retorna success si todo salió bien y sino, se retorna error
			if($stmt->execute()){
				return "success";
			}else{
				return "error";
			}
			$stmt->close();
		}

		//--------------------------------PAGOS------------------------------
		//agrega un nuevo registro a la tabla pagos
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

		//se retornan todos los registros que se encuentran en la tabla pagos, ordenados ascendentemente de acuerdo al id
		public static function vistaPagosModel($tabla){
			$stmt = Conexion::conectar()->prepare("SELECT id_pago, id_alumna, id_grupo, nombre_mama, fecha_pago, fecha_envio, imagen, folio FROM $tabla ORDER BY id_pago ASC");	
			$stmt->execute(); 
			return $stmt->fetchAll();

			$stmt->close();
		}

		//se obtiene el nombre de la alumna de acuerdo a su id
		public static function nombreAlumna($id){
			$stmt = Conexion::conectar()->prepare("SELECT id_alumna, nombre, apellido FROM alumnas WHERE id_alumna=$id");	
			$stmt->execute(); 
			return $stmt->fetch(PDO::FETCH_BOTH);
			$stmt->close();
		}

		//se retornan todas las alumnas que se encuentran registradas
		public static function listarAlumnasModel(){
			$stmt = Conexion::conectar()->prepare("SELECT id_alumna, nombre, apellido FROM alumnas ORDER BY id_alumna ASC");	
			$stmt->execute(); 
			return $stmt->fetchAll();

			$stmt->close();
		}

		//se listan las alumnas de acuerdo al grupo al que pertenecen
		public static function listarGrupoAlumnasModel($id){
			$stmt = Conexion::conectar()->prepare("SELECT id_alumna, nombre, apellido FROM alumnas WHERE id_grupo=$id ORDER BY id_alumna ASC");	
			$stmt->execute(); 
			return $stmt->fetchAll();

			$stmt->close();
		}

		//se listan todas las alumnas menos la que ya se encuentra ligada con el registro
		public static function todosMenosUnoA($id){
			$stmt = Conexion::conectar()->prepare("SELECT id_alumna, nombre, apellido FROM alumnas WHERE id_alumna!=$id ORDER BY id_alumna ASC");	
			$stmt->execute(); 
			return $stmt->fetchAll();

			$stmt->close();
		}

		//retorna los valores del registro que se quiere editar
		public static function editarPagoModel($datosModel, $tabla){
			$stmt = Conexion::conectar()->prepare("SELECT id_pago, id_alumna, id_grupo, nombre_mama, fecha_pago, imagen, folio FROM $tabla WHERE id_pago = :id");
			$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);	
			$stmt->execute();

			return $stmt->fetch();

			$stmt->close();
		}

		//actualiza el registro del pago que se quiere editar
		public static function actualizarPagoModel($datosModel, $tabla){
			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET id_alumna = :alumna, id_grupo = :grupo, nombre_mama = :mama, fecha_pago = :fecha, imagen = :imagen, folio = :folio WHERE id_pago = :id");

			$stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
			$stmt->bindParam(":alumna", $datosModel["alumna"], PDO::PARAM_INT);
			$stmt->bindParam(":grupo", $datosModel["grupo"], PDO::PARAM_INT);
			$stmt->bindParam(":mama", $datosModel["mama"], PDO::PARAM_STR);
			$stmt->bindParam(":fecha", $datosModel["fecha"], PDO::PARAM_STR);
			$stmt->bindParam(":imagen", $datosModel["imagen"], PDO::PARAM_STR);
			$stmt->bindParam(":folio", $datosModel["folio"], PDO::PARAM_STR);

			if($stmt->execute()){
				return "success";
			}else{
				return "error";
			}

			$stmt->close();

		}

		//método que se encarga de borrar el pago de entre los registros de la base de datos	
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