<?php

include 'config.php';

$nome = $_POST['nome'];
$tipo_id = $_POST['tipo'];
$quant = $_POST['quant'];
$valor = $_POST['valor'];
$imposto = $_POST['imposto'];



$conn = mysqli_connect($servidor,$dbusuario,$dbsenha,$dbname);
$sql = mysqli_query($conn, "INSERT INTO produto(id_produto, nome, tipo_id, quant, valor, imposto) VALUES (NULL, '$nome', '$tipo_id', '$quant', '$valor', '$imposto')");

if(!$sql) {
	echo "<script type='text/javascript'> alert ('Erro ao cadastrar produto!'); window.location ='cadastro_prod.php'; </script>";
}else{
	echo "<script>alert('Produto cadastrado!'); window.location ='consultar_prod.php'; </script>";
}

?>
