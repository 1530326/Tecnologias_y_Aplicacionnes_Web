<?php
	require_once "conexion.php";

	class Datos extends Conexion{

		public static function ingresarModel($datosModel, $tabla){
			$sql = Conexion::conectar()->prepare("SELECT id_usuario, email, contra, nombre_usuario, fecha_agregado, foto FROM $tabla WHERE email=:email AND contra=:contra");	

			$sql->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
			$sql->bindParam(":contra", $datosModel["contra"], PDO::PARAM_STR);

			$sql->execute();

			return $sql->fetch();

			$sql->close();
		}

		//función para agregar un nuevo usuario, recibe todos los parámetros necesarios para registrarlo en la base de datos
		public static function addUserModel($datosModel, $tabla){
			$sql = Conexion::conectar()->prepare("INSERT INTO $tabla(id_usuario, nombre, apellido, nombre_usuario, contra, email, fecha_agregado, foto) VALUES (NULL,:nombre, :apellido, :nombreUsuario, :contra, :email, :fecha, :ruta)");	

			$sql->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
			$sql->bindParam(":apellido", $datosModel["apellido"], PDO::PARAM_STR);
			$sql->bindParam(":nombreUsuario", $datosModel["nickname"], PDO::PARAM_STR);
			$sql->bindParam(":contra", $datosModel["contra"], PDO::PARAM_STR);
			$sql->bindParam(":email", $datosModel["correo"], PDO::PARAM_STR);
			$sql->bindParam(":fecha", $datosModel["fecha"], PDO::PARAM_STR);
			$sql->bindParam(":ruta", $datosModel["ruta"], PDO::PARAM_STR);

			if($sql->execute()){
				return "success";
			}else{
				return "error";
			}

			$sql->close();
		}

		//este método retorna todos los registros que se encuentran en la tabla usuarios
		public static function vistaUsuariosModel($tabla){

			$stmt = Conexion::conectar()->prepare("SELECT id_usuario, nombre, apellido, nombre_usuario, email, fecha_agregado FROM $tabla");	
			$stmt->execute(); 
			return $stmt->fetchAll();

			$stmt->close();

		}

		//borra el registro de la tabla usuarios de acuerdo al id que se manda como parametro
		public static function borrarUsuariosModel($datosModel, $tabla){

			$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_usuario = :id");
			$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);

			if($stmt->execute()){
				return "success";
			}else{
				return "error";
			}
			$stmt->close();

		}
	
		//regresa los valores de los campos del registro que fue seleccionado
		public static function editarUsuariosModel($datosModel, $tabla){

			$stmt = Conexion::conectar()->prepare("SELECT id_usuario, nombre, apellido, nombre_usuario, contra, email, foto FROM $tabla WHERE id_usuario = :id");
			$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);	
			$stmt->execute();

			return $stmt->fetch();

			$stmt->close();
		}

		//manda todos los datos recogidos del formulario del usuario seleccionado para actualizar el registro en la base de datos
		public static function actualizarUsuariosModel($datosModel, $tabla){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, apellido = :apellido, nombre_usuario = :nickname, contra = :contra, email = :email, fecha_agregado = :fecha, foto = :foto WHERE id_usuario = :id");

			$stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
			$stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
			$stmt->bindParam(":apellido", $datosModel["apellido"], PDO::PARAM_STR);
			$stmt->bindParam(":nickname", $datosModel["nickname"], PDO::PARAM_STR);
			$stmt->bindParam(":contra", $datosModel["contra"], PDO::PARAM_STR);
			$stmt->bindParam(":email", $datosModel["correo"], PDO::PARAM_STR);
			$stmt->bindParam(":fecha", $datosModel["fecha"], PDO::PARAM_STR);
			$stmt->bindParam(":foto", $datosModel["ruta"], PDO::PARAM_STR);

			if($stmt->execute()){
				return "success";
			}else{
				return "error";
			}

			$stmt->close();

		}

		//------------------------------------CATEGORÍAS------------------------------------
		//función para agregar una nueva categoria, recibe todos los parámetros necesarios para registrarlo en la base de datos
		public static function addCategoriaModel($datosModel, $tabla){
			$sql = Conexion::conectar()->prepare("INSERT INTO $tabla(id_categoria, nombre, descripcion, fecha_agregado) VALUES (NULL,:nombre, :descripcion, :fecha)");	

			$sql->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
			$sql->bindParam(":descripcion", $datosModel["descripcion"], PDO::PARAM_STR);
			$sql->bindParam(":fecha", $datosModel["fecha"], PDO::PARAM_STR);

			if($sql->execute()){
				return "success";
			}else{
				return "error";
			}

			$sql->close();
		}

		//este método retorna todos los registros que se encuentran en la tabla categorías
		public static function vistaCategoriasModel($tabla){

			$stmt = Conexion::conectar()->prepare("SELECT id_categoria, nombre, descripcion, fecha_agregado FROM $tabla");	
			$stmt->execute(); 
			return $stmt->fetchAll();

			$stmt->close();

		}

		//borra el registro de la tabla categorias de acuerdo al id que se manda como parametro
		public static function borrarCategoriasModel($datosModel, $tabla){

			$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_categoria = :id");
			$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);

			if($stmt->execute()){
				return "success";
			}else{
				return "error";
			}
			$stmt->close();

		}
	
		//regresa los valores de los campos del registro que fue seleccionado
		public static function editarCategoriasModel($datosModel, $tabla){

			$stmt = Conexion::conectar()->prepare("SELECT id_categoria, nombre, descripcion FROM $tabla WHERE id_categoria = :id");
			$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);	
			$stmt->execute();

			return $stmt->fetch();

			$stmt->close();
		}

		//manda todos los datos recogidos del formulario de la categoria seleccionado para actualizar el registro en la base de datos
		public static function actualizarCategoriasModel($datosModel, $tabla){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, descripcion = :descripcion, fecha_agregado = :fecha WHERE id_categoria = :id");

			$stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
			$stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
			$stmt->bindParam(":descripcion", $datosModel["descripcion"], PDO::PARAM_STR);
			$stmt->bindParam(":fecha", $datosModel["fecha"], PDO::PARAM_STR);

			if($stmt->execute()){
				return "success";
			}else{
				return "error";
			}

			$stmt->close();

		}

		//------------------------------------PRODUCTOS-------------------------------
		//lista todas las categorias que se encuentran registradas en la base de datos
		public static function listarCategoriasModel($tabla){
			$sql = Conexion::conectar()->prepare("SELECT id_categoria, nombre FROM $tabla");

			$sql->execute();

			return $sql->fetchAll();
			$sql->close();
		}

		//lista todas las categorías menos la que tiene seleccionada el registro
		public static function listarCategoriaMenosUnaModel($id, $tabla){
			$sql = Conexion::conectar()->prepare("SELECT id_categoria, nombre FROM $tabla WHERE id_categoria!=$id");

			$sql->execute();

			return $sql->fetchAll();
			$sql->close();
		}

		//regresa el nombre del id_categoria con la que esta ligada el registro
		public static function listOneCategoriaModel($id, $tabla){
			$sql = Conexion::conectar()->prepare("SELECT nombre FROM $tabla WHERE id_categoria=$id");
			$sql->execute(); 
			return $sql->fetch(PDO::FETCH_BOTH);

			$sql->close();
		}

		//función para agregar un nuevo producto, recibe todos los parámetros necesarios para registrarlo en la base de datos
		public static function addProductosModel($datosModel, $tabla){
			$sql = Conexion::conectar()->prepare("INSERT INTO $tabla(id_producto, codigo_producto, nombre, fecha_agregado, precio, stock, id_categoria, foto) VALUES (NULL,:codigo, :nombre, :fecha, :precio, :stock, :categoria, :foto)");	

			$sql->bindParam(":codigo", $datosModel["codigo"], PDO::PARAM_STR);
			$sql->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
			$sql->bindParam(":fecha", $datosModel["fecha"], PDO::PARAM_STR);
			$sql->bindParam(":precio", $datosModel["precio"], PDO::PARAM_STR);
			$sql->bindParam(":stock", $datosModel["stock"], PDO::PARAM_INT);
			$sql->bindParam(":categoria", $datosModel["categoria"], PDO::PARAM_INT);
			$sql->bindParam(":foto", $datosModel["ruta"], PDO::PARAM_STR);

			if($sql->execute()){
				return "success";
			}else{
				return "error";
			}

			$sql->close();
		}

		//este método retorna todos los registros que se encuentran en la tabla productos
		public static function vistaProductosModel($tabla){

			$stmt = Conexion::conectar()->prepare("SELECT id_producto, codigo_producto, nombre, precio, stock, id_categoria, fecha_agregado FROM $tabla");	
			$stmt->execute(); 
			return $stmt->fetchAll();

			$stmt->close();

		}

		//borra el registro de la tabla productos de acuerdo al id que se manda como parametro
		public static function borrarProductosModel($datosModel, $tabla){

			$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_producto = :id");
			$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);

			if($stmt->execute()){
				return "success";
			}else{
				return "error";
			}
			$stmt->close();

		}
	
		//regresa los valores de los campos del registro que fue seleccionado
		public static function editarProductosModel($datosModel, $tabla){

			$stmt = Conexion::conectar()->prepare("SELECT id_producto, codigo_producto, nombre, precio, id_categoria, stock, foto FROM $tabla WHERE id_producto = :id");
			$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);	
			$stmt->execute();

			return $stmt->fetch();

			$stmt->close();
		}

		//manda todos los datos recogidos del formulario del producto seleccionado para actualizar el registro en la base de datos
		public static function actualizarProductosModel($datosModel, $tabla){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET codigo_producto = :codigo, nombre = :nombre, precio = :precio, fecha_agregado = :fecha, id_categoria = :categoria, foto = :foto WHERE id_producto = :id");

			$stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
			$stmt->bindParam(":codigo", $datosModel["codigo"], PDO::PARAM_STR);
			$stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
			$stmt->bindParam(":precio", $datosModel["precio"], PDO::PARAM_STR);
			$stmt->bindParam(":categoria", $datosModel["categoria"], PDO::PARAM_INT);
			$stmt->bindParam(":fecha", $datosModel["fecha"], PDO::PARAM_STR);
			$stmt->bindParam(":foto", $datosModel["ruta"], PDO::PARAM_STR);

			if($stmt->execute()){
				return "success";
			}else{
				return "error";
			}

			$stmt->close();

		}

		//este método retorna todos los registros que se encuentran en la tabla historial de acuerdo al id del producto
		public static function vistaHistorialModel($id,$tabla){

			$stmt = Conexion::conectar()->prepare("SELECT id_historial, id_usuario, fecha, nota, referencia, cantidad FROM $tabla WHERE id_producto=$id");	
			$stmt->execute(); 
			return $stmt->fetchAll();

			$stmt->close();

		}

		//función para agregar una nueva entrada, recibe todos los parámetros necesarios para registrarlo en la base de datos
		public static function addEntradaModel($datosModel, $tabla, $stock){
			$sql = Conexion::conectar()->prepare("INSERT INTO $tabla(id_historial, id_producto, id_usuario, fecha, nota, referencia, cantidad) VALUES (NULL,:producto, :usuario, :fecha, :nota, :referencia, :cantidad)");	

			$sql->bindParam(":producto", $datosModel["id_producto"], PDO::PARAM_INT);
			$sql->bindParam(":usuario", $datosModel["id_usuario"], PDO::PARAM_INT);
			$sql->bindParam(":fecha", $datosModel["fecha"], PDO::PARAM_STR);
			$sql->bindParam(":nota", $datosModel["nota"], PDO::PARAM_STR);
			$sql->bindParam(":referencia", $datosModel["referencia"], PDO::PARAM_STR);
			$sql->bindParam(":cantidad", $datosModel["cantidad"], PDO::PARAM_INT);

			if($sql->execute()){
				$stmt = Conexion::conectar()->prepare("UPDATE productos SET stock = :stock WHERE id_producto = :id");
				$stmt->bindParam(":id", $datosModel["id_producto"], PDO::PARAM_INT);
				$stmt->bindParam(":stock", $stock, PDO::PARAM_INT);

				if($stmt->execute()){
					return "success";
				}else{
					return "error";
				}
			}else{
				return "error";
			}

			$sql->close();
		}

		//función para agregar una nueva salida, recibe todos los parámetros necesarios para registrarlo en la base de datos
		public static function addSalidaModel($datosModel, $tabla, $stock){
			$sql = Conexion::conectar()->prepare("INSERT INTO $tabla(id_historial, id_producto, id_usuario, fecha, nota, referencia, cantidad) VALUES (NULL,:producto, :usuario, :fecha, :nota, :referencia, :cantidad)");	

			$sql->bindParam(":producto", $datosModel["id_producto"], PDO::PARAM_INT);
			$sql->bindParam(":usuario", $datosModel["id_usuario"], PDO::PARAM_INT);
			$sql->bindParam(":fecha", $datosModel["fecha"], PDO::PARAM_STR);
			$sql->bindParam(":nota", $datosModel["nota"], PDO::PARAM_STR);
			$sql->bindParam(":referencia", $datosModel["referencia"], PDO::PARAM_STR);
			$sql->bindParam(":cantidad", $datosModel["cantidad"], PDO::PARAM_INT);

			if($sql->execute()){
				$stmt = Conexion::conectar()->prepare("UPDATE productos SET stock = :stock WHERE id_producto = :id");
				$stmt->bindParam(":id", $datosModel["id_producto"], PDO::PARAM_INT);
				$stmt->bindParam(":stock", $stock, PDO::PARAM_INT);

				if($stmt->execute()){
					return "success";
				}else{
					return "error";
				}
			}else{
				return "error";
			}

			$sql->close();
		}

		//----------------------SECCION DASHBOARD-----------------------------
		public static function contarModel($tabla){
			$sql = Conexion::conectar()->prepare("SELECT count(*) FROM $tabla");
			$sql->execute(); 
			return $sql->fetch(PDO::FETCH_BOTH);

			$sql->close();
		}
	}
?>