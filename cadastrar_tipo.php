<?php

include 'config.php';

$tipo = $_POST['tipo'];



$conn = mysqli_connect($servidor,$dbusuario,$dbsenha,$dbname);
$sql = mysqli_query($conn, "INSERT INTO tipo(id_tipo, tipo) VALUES (NULL, '$tipo')");

if(!$sql) {
	echo "<script type='text/javascript'> alert ('Erro ao cadastrar tipo!'); window.location ='cadastro_tipo.php'; </script>";
}else{
	echo "<script>alert('Tipo cadastrado!'); window.location ='consultar_tipo.php'; </script>";
}

?>
