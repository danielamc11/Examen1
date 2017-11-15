<?php 
class Cuenta{
public $numcuenta;
public $saldo;

function _contruct($numcuenta, $saldo){
	$this->numcuenta=$numcuenta;
	$this->saldo=$saldo;


}
function depositar($monto){
if($monto<0){
	echo "<h2>No se puede hacer el deposito </h2>";
}else{
	$saldo=$saldo+$monto;
	echo "<h2>El deposito se realizo correctamente </h2>";
}
}


function retirar($monto){
if($monto<0){
echo "<h2>No se puede hacer el retiro </h2>";
}else{
	$saldo -= $monto;
	echo "<h2>El retiro se realizo correctamente </h2>";
}
}
function transferir($numcuenta,$monto){
	if($saldo>=$monto){
       retirar($monto);
       $numcuenta.depositar($monto);
	}else{
	echo "<h2>No se pudo realizar la tranferencia </h2>";	
	}
}
function mostrarDatos(){
	return "<b>$this->numcuenta</br>$this->saldo";
}
}


 ?>
