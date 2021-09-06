<?php
include 'config.php';


$id_produto = $_GET['id_produto'];

$conn = mysqli_connect($servidor,$dbusuario,$dbsenha,$dbname);
mysqli_select_db($conn,'$dbname');
$sql = "DELETE FROM produto WHERE id_produto = '$id_produto'";

if (mysqli_query($conn, $sql))
	echo "<script>alert('Produto deletado!'); window.location ='consultar_prod.php'; </script>";
else
	echo "<script type='text/javascript'> alert ('Erro ao deletar produto!'); window.location ='consultar_prod.php'; </script>";

?>