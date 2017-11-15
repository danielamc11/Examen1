<?php 

class fraccion{
	public $denominador;
	public $numerador;

	public function _construct($denominador, $numerador){
		$this->denominador= $denominador;
		$this->numerador =$numerador;
	}

	public function suma($num,$deno){
$ressuma= $this->numerador/$this->denominador +$num/$deno;
echo "La suma es: ".$ressuma ."<br>";
}
	function resta($num,$deno){
$resresta= $this->numerador/$this->denominador -$num/$deno;
echo "La resta es: ".$resresta."<br>";
}
	function multiplicacion($num,$deno){
$resmulti= $this->numerador/$this->denominador * $num/$deno;
echo "La multiplicacion es: ". $resmulti ."<br>";
}
	function division($num,$deno){
$resdivi= ($this->numerador/$this->denominador)/($num/$deno);
echo "La division es: ".$resdivi ."<br>";
}
}

$fraccion = new fraccion(2,4);
$fraccion->sumar(5,9);
$fraccion->restar(4,5);
$fraccion->multiplicacion(2,7);
$fraccion->division(3,8);


?>