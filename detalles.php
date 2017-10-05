<h1>Detalles de linea telefonica</h1>
<?php 
$db= new mysqli("localhost","daniela","123","examen"); 
if(isset($_GET['numero'])){
	$num=$_GET['numero'];
	$consulta=$db->prepare
 ("selec * from lineas where numero=?");
 $consulta->bind_param("i",$num);
 $consulta->execute();
 $filas= $consulta->get_result();

/*Como solo es una fila no ocupamos while */
$mifila=$filas->fetch_assoc();
echo "<h2>".$mifila['operador']."</h2>";
echo "Fecha firma de contrato: ".$miFila['fechafirmacontrato'];
echo "<hr><a href='index.php'>Regresar</a>";
}
else echo "<hr><a href='index.php'>Regresar</a>";

$db->close();
 ?>