<?php
  //se obtiene una lista con los grupos registrados en la base de datos
  $mvc = new MvcController();
  $grupos = $mvc->listarGruposController();
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Danzlife</title>
    <link rel="stylesheet" href="../foundation.css" />
    <script src="../js/vendor/modernizr.js"></script>
    <script type="text/javascript" language="javascript">
      function obtiene_http_request(){
        //esta función nos sirve para que en el momento que se seleccione un grupo se actualice el segundo select con los registros que están ligados a la opción del primer select
        var req = false;
        try{
          req = new XMLHttpRequest(); /* para Firefox */
        }catch(err1){
          try{
            req = new ActiveXObject("Msxml2.XMLHTTP");
          }catch(err2){
            try{
              req = new ActiveXObject("Microsoft.XMLHTTP");/* algunas versiones IE */
            }catch(err3){
              req = false;
            }
          }
        }
        return req;
      }
      var miPeticion = obtiene_http_request();

      //esta funcion redirecciona a un archivo que se encarga de imprimir el archivo
      function alumnas(id,ide,url){
        var mi_aleatorio=parseInt(Math.random()*99999999);
        var vinculo=url+"&id="+id+"&rand="+mi_aleatorio;
        miPeticion.open("GET",vinculo,true);
        miPeticion.onreadystatechange=miPeticion.onreadystatechange=function(){
          if (miPeticion.readyState==4){
            if (miPeticion.status==200){
                var http=miPeticion.responseText;
                document.getElementById(ide).innerHTML= http;
            }
          }
        }
        miPeticion.send(null);
      }

      function limpiar(){
        document.form.reset();
      }
    </script>
  </head>
  <body>
     
    <div class="row">
      <h4 align="center">Formulario de envío de Comprobantes<br>Festival Verano 2018</h4>
      <form action="" method="POST" enctype="multipart/form-data" name="formP">
        <div><label>Grupo: </label>
            <select name="grupo" id="" onchange="alumnas(document.formP.grupo.value,'students','index.php?action=selectAlumnas')">
              <option>--Seleccione</option>
              <?php foreach($grupos as $group): ?>
              <option value="<?php echo $group["id_grupo"]; ?>"><?php echo $group["nombre"]; ?></option>
              <?php endforeach; ?>
            </select>
        </div>
      	<div id="students">
          <label>Alumna:</label>
          <select>
            <option>--Seleccione</option>
          </select>
        </div>
        <div>
          <label>Nombre de la mamá: </label>
          <input type="text" name="mama">
        </div>
        <div>
          <label>Fecha de pago: </label>
          <input type="date" name="fechaPago">
        </div>
        <div>
          <label>Imagen: </label>
          <input type="file" name="imagen" accept="image/*" required>
        </div>
        <div>
          <label>Folio: </label>
          <input type="text" name="folio">
        </div>
        <input type="submit" name="submit" class="button" value="Guardar">
      </form>
    </div>

  </body>
</html>

<?php
  //se crea un objeto de la clase MvcController y se manda llamar el método de addPagoController cuando se presiona el botón de guardar
	$registro = new MvcController();
	$registro->addPagoController();
?>