<?php 
$cuenta = $_POST["cuenta"];
	$monto= $_POST["monto"];

	require("cuenta.php"); 
	$cuenta1 = new Cuenta(1,2000);
	$cuenta2= new Cuenta(2,80000);
	echo $cuenta1 -> depositar($cuenta ,$monto);
	echo $cuenta1 -> retirar($cuenta ,$monto);
	echo $cuenta1 -> transferir($cuenta ,$monto);
?>

 ?>