<?php 
try {
	require_once('funciones/conexion.php');
	$sql = 'SELECT * FROM stock_telefonos';
	$resultado = $conn->query($sql);
} catch (Exception $e) {
	$error = $e->getMessage();
}
?>