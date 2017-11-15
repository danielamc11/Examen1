<?php 
	class Contador 
	{
		public $num;
		public $aux;
		public function __construct($nume){
			$this->num = $nume;
		}
		public function incrementar($nume1){
			$this->num +=  $nume1;

			echo "El numero incrementado en ".$nume1." es: ".$this->num.'<br>';
		}
		public function decrementar($nume2){
			$this->num -= $nume2;

			echo "El numero decrementado en ".$nume2." es: ".$this->num.'<br>';
		}
		public function devolver(){
			return $this->num;
		}
		
	}

	$cont = new Contador(5);
	$cont->incrementar(4);
	$cont->decrementar(6);
	$cont->incrementar(8);
	
	


 ?>