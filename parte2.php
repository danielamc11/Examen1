<?php /*ParteII */
if (isset($_POST['imv'])) {
	$subtotal=$_POST['subtotal'];
	$imv=$_POST['imv'];
	$descuento=0.1;
	
	
}
$total=$subtotal+$imv;

if($total>=20000){
	$totald=$total-$descuento;
	echo "El total a pagar es de: $total
	Se aplico un descuento de 10% ";
}
else{
echo "El total a pagar es de: $total";
}

?>