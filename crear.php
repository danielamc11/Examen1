<?php /*crear*/
$db= new mysqli("localhost","daniela","123","examen"); 

if (isset($_POST['num'])) {
	$numer=$_POST['num'];
	$oper=$_POST['ope'];
	$plan=$_POST['plan'];
	$marca=$_POST['mar'];
	$modelo=$_POST['mod'];
	$fecha=$_POST['fec'];
	$plazo=$_POST['pla'];

	/* inser into TABLA(COLUMNAS) values(DATOS) */
	$consulta=$db->prepare //cuando hay parametros
	("insert into lineas(numero, operador, plan, marcaclular, modelocelular, fechafirmacontrato, plazomeses) values(?,?,?,?,?,?,?)");
	$consulta->bind_param("isssssi",$numer, $oper, $plan, $marca , $modelo, $fecha, $plazo);

	$consulta->execute();
	if ($consulta->affected_rows>0) {
		echo "<h2>Insercion exitosa</h2>";
		echo "<a href= 'index.php'>Regresar</a>";

}
else {
	echo "<h2>Fallo al insertar</h2>";
		echo "<a href= 'index.php'>Regresar</a>";
}
} else echo "<a href='index.php'>Regresar</a>";

$db->close(); //Cierra
 ?>