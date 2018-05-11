<?php
	echo "<h1 align='center'>Práctica 3: Serie de Fibonacci</h1>";
	/*Utilizando POO desarrollar un script en donde se almacenen en un array numerico de 25 posiciones y se imprima la serie fibonacci del mismo, los valores del array se van a ir llenando co base al calculo de la serie.
	*/

	/**
	* 
	*/
	class Arreglo
	{
		private $aOriginal = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25);
		private $aFibonacci = array();

		public function mostrarArregloOriginal(){
			for($i=0;$i<sizeof($this->aOriginal);$i++){
				echo $this->aOriginal[$i]." ";
			}
		}

		public function fibonacci(){
			$this->aFibonacci[0] = $this->aOriginal[0];
			$this->aFibonacci[1] = $this->aOriginal[1];
			for($j=2;$j<sizeof($this->aOriginal);$j++){
				$this->aFibonacci[$j] = $this->aOriginal[$j-1]+$this->aOriginal[$j-2];
			}
		}

		public function mostrarFibonacci(){
			for($i=0;$i<sizeof($this->aFibonacci);$i++){
				echo $this->aFibonacci[$i]." ";
			}
		}
	}

	$arreglos = new Arreglo();
	echo "<b>Arreglo Original: </b>";
	$arreglos->mostrarArregloOriginal();
	$arreglos->fibonacci(); 
	echo "<br>";
	echo "<br><b>Arreglo Fibonacci: </b>";
	$arreglos->mostrarFibonacci();  
?>