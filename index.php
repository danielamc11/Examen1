<?php /* index.php */
echo "<h1>Index</h1>";
$db= new mysqli("localhost","daniela","123","examen"); //Abre

$sql="select * from lineas"; //where FILTRO
$consulta=$db->query($sql);
if($consulta===FALSE) {
	echo "<h2>Error. ".$db->error."</h2>";
}
//Recorremos el conjunto de filas
else{
	while($fila=$consulta->fetch_assoc()) {
	$link="detalles.php?numero=".$fila['numero'];
	$numero=$fila['numero']." ".$fila['operador'];
	echo "<a href='$link'>$numero</a><br>";
}
}
$db->close(); //Cierra
?>

<h2> Inserta dato</h2>
<form action="insert.php" method="post">
	Numero: <input type="text" name="num"><br>
	Operador: <input type="text" name="ope"><br>
	Plan: <input type="text" name="plan"><br>
	Fecha Firma Contrato (AAAA-MM-DD): <input type="text" name="fec"><br>
	Modelo Celular: <input type="text" name="mod"><br>
	Marca Celular: <input type="text" name="mar"><br>
	Plazo meses: <input type="text" name="pla"><br>
	<button type="submit"> Crear</button>
