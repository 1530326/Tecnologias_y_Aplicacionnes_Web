<?php
	echo "<h1 align='center'>Práctica 2</h1>";

	echo "<h2>Primera parte: </h2>";
	echo "Ordenar un array ascendente y descendente";
	$arreglo = array(2,4,6,8,10);
	echo "<h3>Arreglo</h3>";
	print_r($arreglo);

	echo "<h3>Arreglo ascendente</h3>";
	sort($arreglo);
	print_r($arreglo);
	echo "<h3>Arreglo descendente</h3>";
	rsort($arreglo);
	print_r($arreglo);


	echo "<h2>Segunda parte: </h2>";
	echo "Hacer un programa en PHP que escriba vuestro nombre (en negrita) y la ciudad dónde naciste<br>";
	echo "<b>Angela Judith Carrizales Pérez</b><br>";
	echo "Ciudad de nacimiento: Victoria, Tamaulipas";


	echo "<h2>Tercera parte: </h2>";
	echo "Llenar un array de 10 posiciones e imprimirlos en un ciclo for<br>";
	$numeros = array(1,2,3,4,5,6,7,8,9,10);
	for($i=0;$i<10;$i++){
		echo $numeros[$i]." ";
	}
?>