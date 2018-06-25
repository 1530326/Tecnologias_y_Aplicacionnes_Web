<?php
	//obtiene las alumnas de acuerdo al id del grupo
	$mvc = new MvcController();
	$alumnas = $mvc->listarAlumnasController($_GET["id"]);

	//se imprime el select con los options traídos por el método
?>
<div class="row">
<label>Alumna: </label>
<select name="alumna" id="alumna">
	<?php foreach($alumnas as $st): ?>
	<option value="<?php echo $st["id_alumna"] ?>"><?php echo $st["nombre"]." ".$st["apellido"]; ?></option>
	<?php endforeach; ?>
</select>
</div>