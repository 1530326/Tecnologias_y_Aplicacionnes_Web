<?php
	echo "<h2>Práctica no. 1</h2>";
	$persona = array('p1_nombre'=>'Angela',
                     'p1_apellido'=>'Carrizales',
                     'p2_nombre'=>'Liliana',
                     'p2_apellido');

	$persona['p2_apellido'] = $persona['p1_apellido'];

	echo "Persona 1: ".$persona['p1_nombre']." ".$persona['p1_apellido'];
	echo "<br>";
	echo "Persona 2: ".$persona['p2_nombre']." ".$persona['p2_apellido'];


	echo "<br><br>Arreglo de numeros<br>";
	$numeros = array(1,2,3,4,5,6);
	echo var_dump($numeros);

	for($i=0;$i<6;$i++){
		if($numeros[$i]==4){
			echo "Posicion: ".$i." Valor: ".$numeros[$i];
		}
	}
	echo "<br><br>Sort: ";
	sort($numeros);
	echo var_dump($numeros);
	echo "<br><br>Rsort: ";
	rsort($numeros);
	var_dump($numeros);

?>