<?php
include 'config.php';


$id_tipo = $_GET['id_tipo'];

$conn = mysqli_connect($servidor,$dbusuario,$dbsenha,$dbname);
mysqli_select_db($conn,'$dbname');
$sql = "DELETE FROM tipo WHERE id_tipo = '$id_tipo'";

if (mysqli_query($conn, $sql))
	echo "<script>alert('Tipo deletado!'); window.location ='consultar_tipo.php'; </script>";
else
	echo "<script type='text/javascript'> alert ('Erro ao deletar tipo!'); window.location ='consultar_tipo.php'; </script>";

?>